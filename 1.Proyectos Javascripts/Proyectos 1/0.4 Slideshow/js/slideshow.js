/*=========================================
OBJETO CON LAS PROPIEDADES DEL SLIDESHOW
===========================================*/

var prop = {

    paginacion: document.querySelectorAll("#paginacion li"),
    circulosSlide: 0,
    cajaSlide: document.querySelector("#slide ul"),
    animacionSlide: "fade",
    imgSlide: document.querySelectorAll("#slide ul li"),
    avanzar: document.querySelector("#slide #avanzar"),
    retroceder: document.querySelector("#slide #retroceder"),
    velocidadSlide: 3000

}



/*=========================================
OBJETO CON LOS METODOS DEL SLIDESHOW
===========================================*/

var metd = {

    inicioSlide: function(){

        for (let i = 0; i < prop.paginacion.length; i++) {
            prop.paginacion[i].addEventListener("click", metd.paginacionSlide);
        }
    
    prop.avanzar.addEventListener("click", metd.avanzar);
    prop.retroceder.addEventListener("click", metd.retroceder);

    metd.intervalo();

    },

    paginacionSlide: function(circulosSlide){

        prop.circulosSlide = circulosSlide.target.parentNode.getAttribute("circulos")-1;

        metd.movimientoSlide(prop.circulosSlide);

    },

    avanzar: function(){

        if(prop.circulosSlide == prop.imgSlide.length-1){

            prop.circulosSlide = 0;

        }else{

            prop.circulosSlide++;

        }

        metd.movimientoSlide(prop.circulosSlide);

    },

    retroceder: function(){

        if(prop.circulosSlide == 0){

            prop.circulosSlide = prop.imgSlide.length-1;

        }else{

            prop.circulosSlide--;

        }
        
        metd.movimientoSlide(prop.circulosSlide);

    },

    movimientoSlide: function(circulosSlide){

        prop.cajaSlide.style.left = circulosSlide * -100+"%";

        for (let i = 0; i < prop.paginacion.length; i++) {
            
            prop.paginacion[i].style.opacity = .5;

        }

        prop.paginacion[circulosSlide].style.opacity = 1;

        if(prop.animacionSlide == "slide"){

            prop.cajaSlide.style.transition = ".7s left ease-in-out";

        }

        if(prop.animacionSlide == "fade"){

            prop.imgSlide[circulosSlide].style.opacity = 0;

            prop.imgSlide[circulosSlide].style.transition = ".7s opacity ease-in-out";

            setTimeout(function(){
                prop.imgSlide[circulosSlide].style.opacity = 1;
            },500);
            
        }        

    },

    intervalo: function(){

        setInterval(function(){

            metd.avanzar()

        }, prop.velocidadSlide)

    }

}

metd.inicioSlide();
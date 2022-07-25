/*=============================================
=            EVENTOS			            =
=============================================*/

/* Nota: Existen dos tipos de eventos que pueden ocurrir con JS:
	     1- los eventos que ocurren desde el DOM(estructura HTML) 
	     2- los eventos que ocurren desde el mismo JS 


/* EVENTOS DESDE EL DOM */


/* Para crear un evento desde el DOM(desde HTML) se utiliza el atributo "onClick" y acto seguido le damos el nombre al evento (TODO ESTO ES EN EL HTML)*/

var cuadro = document.querySelector("#cuadro");

function cambiarColor(){

	cuadro.style.background = "red";

}

/* En este ejemplo vemos como creamos la funcion para el evento que estamos creando desde el DOM(HTML). Creamos una variable global, es decir, fuera de la funcion y le damos como valor el nombre del "id" de la etiqueta HTML, en este caso el ( <div id="cuadro"> ), recordar que como es un "id" lo debemos pasar en dentro de los parentesis con el signo "#", osea ("#cuadro"). Creamos la funcion con el nombre que le pusimos al evento en el DOM, en este caso "cambiarColor" y luego escribimos la tarea a realizar cuando se ejecute ese evento, es decir cuando se de click al boton */


/* ----------------------------------------------------------------------------- */


/* EVENTOS DESDE EL JS */

/* Para crear un evento desde el JS se utiliza la palabra reservada del lenguaje "addEventListener" */

var boton = document.querySelector("#boton");

boton.addEventListener("click",moverCaja)

function moverCaja(){

	cuadro.style.width = "300px";

}


/* Para este evento desde el JS creamos una variable que tomara como valor el nombre del "id" que tiene la etiqueta HTML, en este caso ( <button id="boton"> ), como es un "id" lo pasamos en parentesis como ("#boton"). Con la variable ya creada procedemos a aplicarle el evento con la palabra reservada "addEventListener" y dentro de parentesis le pasamos los parametros que son: 1ro el tipo de evento que se esta ejecutando y 2do la funcion que se va a ejecutar. 

Ya luego solo queda crear la funcion con el mismo nombre que le dimos en el 2do parametro y dentro de la misma escribimos la tarea a ejecutar, es decir cuando se le click al boton */










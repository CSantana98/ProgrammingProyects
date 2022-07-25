/* CREARE DOS "VARIABLES OBJETOS". EN UNA ALMACENARE LAS PROPIEDADES Y EN OTRA LOS METODOS, ESTO CON EL OBJETIVO DE HACERLO MAS ORGANIZADO */


/*=============================================
OBJETO CON LAS PROPIEDADES DE LA CALCULADORA
=============================================*/

/* Variable objeto "prop" de (propiedades) */
var prop = {

	teclas: document.querySelectorAll("#calculadora ul li"),
	accion: null,
	digito: null,
	operaciones: document.querySelector("#operaciones"),
	cantidadSignos: 0,
	cantidadDecimal: false,
	resultado: false


}



/*=============================================
OBJETO CON LOS METODOS DE LA CALCULADORA
=============================================*/

/* Variable objeto "metd" de (metodos) */
var metd = {

	/* Este metodo "inicio" y su ciclo "for" es para hacer una serie de repeticiones en base a la cantidad de teclas/botones que tiene la calculadora. Asi sabre cuantas teclas agrupadas tengo dentro la propiedad "teclas" */
	inicio: function() {

		for (var i = 0; i < prop.teclas.length; i++) {

			/* Accedemos a la variable objeto "prop" y le adaptamos la propiedad "teclas" seguida de la palabra reserv "addEvent..." para indicar que viene una accion de tipo "click" y ejecutar el metodo "oprimirTecla". Esto es simplemente para poder presionar los botones de la calculadora. */
			prop.teclas[i].addEventListener("click", metd.oprimirTecla)

		}

	},

	/* Aqui creamos el metodo "teclado" que es para poder ingresar numeros desde el mismo teclado y no solo dando clicks */
	teclado: function(){

		document.addEventListener("keydown", metd.oprimir);

	},

	oprimir: function(tecla){
		console.log(tecla.keyCode);

		if(tecla.keyCode == 48 || tecla.keyCode == 96){

			prop.accion = "numero";
			prop.digito = 0;

		}

		if(tecla.keyCode == 49 || tecla.keyCode == 97){

			prop.accion = "numero";
			prop.digito = 1;

		}

		if(tecla.keyCode == 50 || tecla.keyCode == 98){

			prop.accion = "numero";
			prop.digito = 2;

		}

		if(tecla.keyCode == 51 || tecla.keyCode == 99){

			prop.accion = "numero";
			prop.digito = 3;

		}

		if(tecla.keyCode == 52 || tecla.keyCode == 100){

			prop.accion = "numero";
			prop.digito = 4;

		}

		if(tecla.keyCode == 53 || tecla.keyCode == 101){

			prop.accion = "numero";
			prop.digito = 5;

		}

		if(tecla.keyCode == 54 || tecla.keyCode == 102){

			prop.accion = "numero";
			prop.digito = 6;

		}

		if(tecla.keyCode == 55 || tecla.keyCode == 103){

			prop.accion = "numero";
			prop.digito = 7;

		}

		if(tecla.keyCode == 56 || tecla.keyCode == 104){

			prop.accion = "numero";
			prop.digito = 8;

		}

		if(tecla.keyCode == 57 || tecla.keyCode == 105){

			prop.accion = "numero";
			prop.digito = 9;

		}

		if(tecla.keyCode == 187 || tecla.keyCode == 107){

			prop.accion = "signo";
			prop.digito = "+";

		}

		if(tecla.keyCode == 189 || tecla.keyCode == 109){

			prop.accion = "signo";
			prop.digito = "-";

		}

		if(tecla.keyCode == 88 || tecla.keyCode == 106){

			prop.accion = "signo";
			prop.digito = "*";

		}

		if(tecla.keyCode == 111){

			prop.accion = "signo";
			prop.digito = "/";

		}

		if(tecla.keyCode == 190 || tecla.keyCode == 110){

			prop.accion = "decimal";
			prop.digito = ".";

		}

		if(tecla.keyCode == 13){

			prop.accion = "igual";

		}

		if(tecla.keyCode == 46){

			metd.borrarCalculadora();

		}

		metd.calculadora(prop.accion, prop.digito);

	},

	/* Aqui si invocamos el metodo "oprimirTecla" dentro de la variable objeto "metd" ya que este si ejecuta con un evento de tipo "click". Le pasamos el parametro con el nombre que queramos eso para indicarles que esta sucediendo un evento */
	oprimirTecla: function(tecla) {

		prop.accion = tecla.target.getAttribute("class");
		prop.digito = tecla.target.innerHTML;
		metd.calculadora(prop.accion, prop.digito);

	},

	calculadora: function(accion, digito) {

		switch (accion) {

			case "numero":

				prop.cantidadSignos = 0;

				if (prop.operaciones.innerHTML == 0) {

					prop.operaciones.innerHTML = digito;

				} else {

					if (prop.resultado) {

						prop.resultado = false;
						prop.operaciones.innerHTML = digito;

					} else {
						prop.operaciones.innerHTML += digito;
					}

				}

				break;

			case "signo":

				prop.cantidadSignos++

				if (prop.cantidadSignos == 1) {

					if (prop.operaciones.innerHTML == 0) {
						prop.operaciones.innerHTML = 0
					} else {
						prop.operaciones.innerHTML += digito;
						prop.cantidadDecimal = false;
						prop.resultado = false;
					}
				}
				break;

			case "decimal":

				if (!prop.cantidadDecimal) {
					prop.operaciones.innerHTML += digito;
					prop.cantidadDecimal = true;
					prop.resultado = false;

				}

				break;

			case "igual":

				prop.operaciones.innerHTML = eval(prop.operaciones.innerHTML);
				prop.resultado = true;

				break;

		}

	},

	borrarCalculadora: function() {

		prop.operaciones.innerHTML = 0;

	}

}

/*=============================================
INVOCANDO/LLAMANDO AL METODO PARA QUE SE EJECUTE
=============================================*/
/* Aqui debemos invocar el metodo fuera de la variable objeto "metd" por que este metodo "inicio" no lo ejecuta nadie, es decir no hay evento de tipo "click" que vaya a iniciarlo por esto debe estar iniciado siempre y para esto se coloca fuera. */
metd.inicio();

metd.teclado();
/*=============================================
=               CONDICIONES                =
=============================================*/
var a = 15;
var b = 25;

if (a > b){

	console.log("A es mayor que B")

}else if(a == b){

	console.log("A es igual que B")

}else{

	console.log("A no es lo mismo que B, y A es menor que B")

}

/* En este ejemplo vemos como se utilizan las distintas condicionales. Si utilizamos solo la condicion "if" no es necesario cerrar con la condicion opuesta, es decir con el "else". Pero, si utilizamos la condicion "else if" si debemos cerrar la condicion con su opuesta el "else".  */


/*=============================================
=               CAMBIOS                     =
=============================================*/
var dia = "lunes";

switch(dia){

	case "sabado":
	console.log("Hoy es sabado, tengo que ir al cine");
	break;

	case "domingo":
	console.log("Hoy es domingo, tengo que ir al teatro");
	break;

	case "jueves":
	console.log("Hoy es lunes, tengo que ir al gym");
	break;

	case "martes":
	console.log("Hoy es martes, tengo que ir al supermercado");
	break;

	case "miercoles":
	console.log("Hoy es miercoles, tengo que ir al trabajo");
	break;

	default: console.log("Voy a descansar");

} 

/* Utilizando los "Cambios" como el "switch" podemos crear varias condiciones/casos(case) diferentes dentro de la misma, con esto nos podemos ahorrar el tener que escribir muchos "else if" para completar algunta tarea. Se debe colocar el "default" siempre al final del switch ya que con este rompemos las demas condiciones/casos(case) en caso de no se cumplan ninguna de las anteriores, es como el "else" del "if"  */



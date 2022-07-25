/*=============================================
=            OBJETOS            =
=============================================*/
 
 /* Los objetos son la coleccion de propiedades y metodos. Cuando creamos una clase y almacenamos su valor en una variable esta variable se convierte en un objeto, este objeto trae una coleccion de propiedades heredadas de la clase ya creada. */
 
 /* Podemos crear un objeto desde 0 sin necesidad de heredar las propiedades desde una clase. */

var object = {

	/* Las "Propiedades" son aquellos indices que le asignamos al objeto con su respectivo valor. Es una asociacion entre un nombre y un valor. */

	nombre:"Christopher",
	edad:24,

	/* Llamamos "Metodos" a aquellas funciones creadas dentro del mismo objeto. Para esto Colocamos el nombre del metodo y acto seguido le damos el valor de "funcion"(function)*/

	descripcion: function(){

		console.log("Su nombre es "+object.nombre+" y tiene "+object.edad+" años")

	}
	
	/* Dentro del metodo escribimos la tarea a ejecutar. Para acceder a las propiedades de dicho objeto desde el "Metodo" debemos escribir el nombre del "Objeto" seguido del nombre de las propiedades, en este caso "object.nombre", "object.edad" */	
	
}

/* Una vez creado el metodo, para ejecutarlo debemos invocarlo y esto de hace colocando el nombre del "Objeto" seguido del nombre del "Metodo" y todo esto fuera de las llaves del objeto. */

object.descripcion();


/* Metodos con Parametros */

var object2 = {

	nombre:"Christopher",

	/* Para crear un metodo con parametros debemos pasar dicho parametro dentro del parentesis, en este caso "saludo".  */
	
	saludar: function(saludo){
		console.log(saludo+" "+object2.nombre);

	}

}

/* Aqui donde invocamos el metodo le decimos cual es el valor que tomara ese parametro. Es por esto que en la consola el parametro "saludo" se sustituira por el valor asignado(al invocar el metodo) es decir "Hola". */

object2.saludar("Hola");
 


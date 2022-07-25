/*=============================================
=    CLASES - JAVASCRIPTS                    =
=============================================*/

/* Son las funciones contructoras y siempre se inician con letra mayuscula. Las clases que veremos a continuacion son todas aquellas clases que estructuran el lenguaje de programacion JS, es decir, bajo esas clases esta creado asi como la mayoria de los demas lenguajes de programacion */

/*=============================================
=       TIPOS DE CLASES PRIMITIVAS           =
=============================================*/
 
/* Clase tipo String */

var string = new String("Esto es un string")
console.log("string", string);

/* Aqui creamos una variable de tipo objeto para trabajar con texto o cadena de caracteres, es decir un "string" y le damos el valor o le asignamos una nueva clase. Por esto escribimos "String" en mayuscula que es la forma de acceder a una clase primitiva */

/* Clase tipo Number */

var number = new Number(10);
console.log("number", number);

/* Aqui creamos una variable de tipo objeto para trabajar numeros, es decir un "number" y le damos el valor o le asignamos una nueva clase. Por esto escribimos "Number" en mayuscula que es la forma de acceder a una clase primitiva */

/* Clase tipo Boolean */

var boolean = new Boolean(false);
console.log("boolean", boolean);


/*=============================================
=        CLASES COMPUESTAS           =
=============================================*/

/* Son aquellas clases que nos permitiran almacenar varios valores o datos */


/* Clase tipo Array */

var array = new Array("rojo","azul","amarillo");
console.log("array", array);

/* Aqui a diferencia de un array convencional, cuando lo utilizamos como una clase no se utilizan los corchetes ( "[]" ) sino que se agregan los indices dentro del parentesis solamente. */


/* Clase tipo Object */
var object = new Object({nombre:"Christopher",
						 edad:24})
console.log("object", object);



/*==========================================================
=    CLASES - PERSONALIZADAS - CREADAS POR EL PROGRAMADOR  =
============================================================ */

/* Asi como existes las Clases que forman los lenguajes de programacion, como desarrolladores tenemos la libertad de crear nuestras propias clases cada una con sus propias propiedades para asi desarrollar alguna determinada tarea. Para esto tenemos que construir las partes que necesita una Clase. */

/* 1- Creamos el propotipo(prototype). Esto vienen siendo las funciones constructoras. Dentro de estas podemos crear propiedades publicas que se podran utilizar una vez que instanciemos la clase */

function Persona(){

	/* Propiedades Publicas */
	this.nombre;
	this.edad;
	
}

/* Las propiedades las escribimos iniciando con la palabra reservada del lenguaje "this" seguida del nombre que queremos que tenga como propiedad. Dejamos las propiedades sin valor para que estos datos sean dinamicos, es decir que puedan cambiar/modificarse desde afuera */


/* 2- Creamos la variable objeto (en este caso "yo") e instanciamos el propotipo (en este caso "Persona") */

/* Varible Objeto */
var yo = new Persona();

/* Propiedades heredadas de la Clase "Persona" */
yo.nombre = "Christopher";
yo.edad = "24 anos";
console.log("yo", yo);


/* Clases con parametros */

function Animales(nombre, raza){

	this.nombre = nombre;
	this.raza = raza;

}

var mascota = new Animales("perro", "pitbul");
console.log("mascota", mascota);

/* Cuando creamos una clase con parametros, es decir, aquellos valores que pasamos dentro de los parentesis, el valor de sus propiedades van hacer los valores de los parametros. */

/* LA DIFERENCIA ENTRE AMBAS FORMAS DE CREAR UNA CLASE ES, QUE EN UNA LE ASIGNAMOS LOS VALORES EN LAS MISMAS PROPIEDADES Y EN LA OTRA SE LOS ASIGNAMOS EN LOS PARAMETROS */









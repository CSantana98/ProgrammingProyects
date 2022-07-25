/*=============================================
=                   FUNCIONES            =
=============================================*/

/* Existen las variables que son globales. Estas son las que se declaran fuera de las funciones y pueden ir cambiando su valor. Y las variables locales son las que se crean dentro de las funciones. Las goblales non sirven para utilizarlas dentro de cualquier funcion y por esto su valor se vuelve dinamico */

/* Esto en una variable goblal */
var globales = 10;
console.log("El valor de esta variable global es:", globales);


/* FUNCIONES SIN PARAMETROS */

/* Nota: Las funciones siempre se escriben o trabajan en dos formas, que son:
1- Cuando de declara la funcion
2- Cuando se ejecuta la funcion */

/* Declarando la funcion */
function saludar(){

	/* Tarea de la funcion */
	console.log("Hola")
}

/* Ejecutando la funcion */
saludar();

/* En este ejemplo vemos como se crea una funcion, primero hay que declararla, es decir dar las instrucciones de que va hacer esa funcion y lo segundo que hay que hacer es ejecutarla , es decir arrancar dicha funcion. Si no se ejecuta no se reflejara en el navegador dicha funcion. */

/* -------------------------------------------------------------------------------- */


/* FUNCIONES CON PARAMETROS */

/* Nota: estas son las funciones que permiten enviar valores dentro de los parentesis */

/* Declarando la funcion */
function operacion(digito1, digito2){

	/* Tarea de la funcion */
	var resultado = digito1 + digito2;
	console.log("Resultado de las variables locales", resultado);

}
/* Ejecutando la funcion */
operacion(5,7);
operacion(10,15);

/* En este ejemplo vemos como se hacen las funciones con parametros, los parametros son basicamente como variables pero estos se construyen dentro del parantesis de la funcion y a estos parametros le damos valor cuando se esta ejecutando la funcion. Con este tipo de funciones tenemos la ventaja de que con la misma tarea(funcion) podemos sacar varios resultados, son funciones mas dinamicas */

/* -------------------------------------------------------------------------------- */


/* FUNCIONES SIN PARAMETROS CON RETORNO */

/* Declarando la funcion */
function retorno1(){

	var numero = 5;
	return numero;

}

/* Ejecutando la funcion */
console.log(retorno1());

/* En este ejemplo vemos como funcionan las funciones con retorno(return). El retorno(return) le da valor a la funcion, que en este caso es(retorno1) y la ejecuta pero con la exepcion de que lo que queremos que nos muestre en pantalla debe ejecutarse fuera de la declaracion. Esto permite poder usar el valor de esa funcion en alguna otra tarea */

/* --------------------------------------------------------------------------------*/


/* FUNCIONES CON PARAMETROS CON RETORNO */

/* Declarando la funcion */
function retorno2(numero){

	return numero;

}

/* Ejecutando la funcion */
console.log(retorno2(10));
console.log(retorno2(20));
console.log(retorno2(100));
console.log(retorno2(200));


/* En este ejemplo vemos que el mismo retorno(return) es el parametro que esta dentro de los parentesis de la funcion donde se esta declarando y luego, lo que queremos que se ejecute y muestre en pantalla lo escribimos por fuera de la declaracion. Con esto logramos que el valor se vuelva dimanico, es decir obtener varios resultados con la misma tarea(funcion)  */

/* -------------------------------------------------------------------------------*/


/* UTILIZANDO LA VARIABLE GLOBAL */

/* Declarando la funcion */
function operacion_globlales(digito1, digito2){

	/* Tarea de la funcion */
	var resultado2 = digito1 + digito2;
	globales = resultado2;
	console.log("El nuevo valor de la variable global es:", globales);	

}
/* Ejecutando la funcion */
operacion_globlales(8,8);
operacion_globlales(9,9);

/* En este caso incluimos la variable global(que la declaramos al inicio de este archivo) en una funcion con parametros y vemos como esta variable global cambia su valor(10) de acuerdo a lo que estemos realizando dentro de la funcion */












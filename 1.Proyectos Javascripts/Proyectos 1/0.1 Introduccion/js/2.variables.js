/*=============================================
=            	   VARIABLES            =
=============================================*/

/* 1 - Variables Numericas */

var numero = 5;
console.log("Este es el numero", numero);

/* En este ejemplo lo que este escrito dentro de las comillas representa
el titulo que queremos que salga en la consola del navegador cuando estemos
probando y lo que le sigue es poner el nombre de la variable, es decir
(numero) o como se le hayamos puesto a la variable */

/* ---------------------------------------------------------------------- */


/* 2 - Variables de Texto o Strings */

var palabra = "palabras";
console.log("Esto es un texto", palabra);

/* En este ejemplo las variables que van a contener textos, palabras, 
letras, etc se colocan entre comillas dobles */

/* ---------------------------------------------------------------------- */


/* 3 - Variables Booleanas */

var booleana = true;
console.log("booleana", booleana);
var boleana = false;
console.log("boleana", boleana);

/* En este ejemplo las variables boleanas solo contienen dos valores
pueden ser false(falso) o true(verdadero) */

/* ---------------------------------------------------------------------- */


/* 4 - Variables tipo Arreglos o Arrays */

var nombreColoresTextos = ["rojo", "amarillo", "azul"];
console.log("nombreColoresTextos", nombreColoresTextos);
var cantidadColoresNumeros = [5, 4, 3];
console.log("cantidadColoresNumeros", cantidadColoresNumeros);
var variablesExistentes = [numero, boleana, booleana, palabra];
console.log("variablesExistentes", variablesExistentes);


/* En este ejemplo vemos los arreglos o arrays que son las variables que 
nos permiten almacenar mas de una informacion. Se pueden almacenar
diferentes tipos de variables o valores. Los valores o datos que estan
dentro de un arreglo(array) se llaman indices, siendo el primero valor
el indice 0, luego 1, luego 2, 3... etc etc  */

var nombreColoresTextos = ["rojo", "amarillo", "azul"];
console.log("nombreColoresTextos", nombreColoresTextos[0]);

/* Si queremos que un arreglo(array) nos muestre solo un valor especifico
debemos colocar exactamente el numero del indice que queremos que nos
muestre*/

/* ------------------------------------------------------------------------------ */


/* 5 - Variables de tipo Objetos o Object */

var jugo = {"ingrediente1":"fresa",
			"ingrediente2":"guineo",
			"ingrediente3":"manzana"}
console.log("Estos son los ingredientes del 1re jugo", jugo);

/* En este ejemplo las variables de este tipo traen dos parametros
importantes que son: la propiedad del objeto y el valor de esa propiedad.
Las propiedades/ingredientes1,2,3(en este caso) las podemos pasar sin las
comillas dobles tambien, simplemente como nombres de propiedades*/

var jugo2 = {ingrediente1:"fresa",
			 ingrediente2:"guineo",
			 ingrediente3:"manzana"}
console.log("Este jugo es de", jugo2.ingrediente1);

/* Si queremos tomar el valor de alguna de estas propiedades/ingredientes
 basta con colocar un punto y luego escribir el nombre de la propiedad/
 ingrediente al que queremos acceder a diferencia de los arrays que lo
 hacemos con [] o con {} */

/* ------------------------------------------------------------------------------- */


/*=================================================
= VARIABLES DOM (MODELO de OBJETOS del DOCUMENTO) =
====================================================*/

/* El DOM es la estructura de objetos que genera el navegador cuando se carga una documento y se puede alterar con JS, es decir, se pueden cambiar dinamicamente los contenidos y aspecto de la pagina */

var caja = document.querySelector("#caja");
console.log("caja", caja);

/* En este ejemplo vemos una forma de interactuar con una etiqueta HTML desde JS. Se utiliza el # cuando la etiqueda HTML(en este caso el <div>) tiene un identidicador unico es decir un "id" ( <div id="caja"></div> ) */

var cajas = document.querySelectorAll(".cajas");
console.log("cajas", cajas);

/* Aqui vemos la forma de interactuar con varios elementos HTML clasificados con el mismo nombre(cajas). Se utiliza el punto(".cajas") para hacer referencia a una 
"clase(class)" y el nombre de esa clase, es decir: ( <div class="caja"></div> ) */

caja.style.width = "200px";
caja.style.height = "200px";
caja.style.background = "red";


/* En este ejemplo vemos como interacturar con el elemento HTML, en este caso el 
( <div> ) y agregarle valores desde el JS*/



























/*=============================================
INTERVALOS DE TIEMPO (SET INTERVAL)
=============================================*/

/* En JS podemos controlar el tiempo en que queremos que se ejecute una tarea/funcion. Un ejemplo seria que podemos pedir que se repita una funcion tantas veces en un intervalo de tiempo */

var tiempo = document.querySelector("#tiempo");
var segundos = 0;


var intervalo = setInterval(function(){

	segundos++;

	tiempo.innerHTML = segundos;
	console.log("segundos", segundos);

},1000)


/* En este ejemplo vemos como utilizar los intervalos de tiempo con la palabra reservada del lenguaje "setInterval", esta se escribe igual que una funcion con la diferencia de que dentro de los parentesis los dos parametros que colocamos son: 1ro el nombre de la funcion y 2do es el tiempo que queremos que se realize esa tarea o las veces que queremos que se repita. El numero "1000" es igual a "1"segundo ya que en la programacion con JS todo se maneja en "milisegundos". con la propiedad "innerHTML" podemos pedir que se reemplaze lo que tengamos dentro de alguna etiqueta HTML, en este caso la caja "tiempo"
("<p id="tiempo">0</p>") y en este caso va a reemplazarse por la variable "segundos" */

/*=============================================
RETARDOS DE TIEMPO (SET TIMEOUT)
=============================================*/

setTimeout(function(){

	clearInterval(intervalo);
	//alert("Se cumplio el tiempo");

},5000)

/* En este ejemplo vemos como utilizar los retardos de tiempo con la palabra reservada del lenguje "setTimeout", esto basicamente nos va a permitir detener la funcion en un determinado tiempo. El numero "5000" es igual a "5"segundos. Asi que le estamos diciendo que se detenga la funcion en 5 segundos.

Al crear la variable "intervalo" que contendra toda la funcion "setInterval" podemos detenerla utilizando el "setTimeout", colocando la accion "clearInterval" y pasando dentro de parantesis el nombre de la variable que contiene a la funcion de arriba que es de intervalo */


/* INTERVALOS CERRADOS */

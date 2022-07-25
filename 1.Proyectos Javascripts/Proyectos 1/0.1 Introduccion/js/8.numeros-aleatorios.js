/*=============================================
=            NUMERO ALEATORIOS            =
=============================================*/

/* Math.random() */


var numeroAleatorio = document.querySelector("#numeroAleatorio");
var numero = 0;

numero = Math.random();
numeroAleatorio.innerHTML = numero;

/* Aqui vemos la forma de como utilizar los numeros aleatorios para alguna tarea que necesitemos desarrollar. En este ejemplo con la propiedad "Math.random" podemos hacer que nos arroje un numero aleatorio entre 0 y 1, es decir desde el 0 hasta el 9 y una serie de numeros decimales. */


/* Math.floor() */

var numeroAleatorio2 = document.querySelector("#numeroAleatorio2");
var numero2 = 0;

numero2 = Math.floor(Math.random()*10);
numeroAleatorio2.innerHTML = numero2;

/* Aqui utilizamos la propiedad "Math.floor", con esta al añadirsela al "Math.random" conseguimos que nos redondee los numeros decimales a numeros enteros. Este redondea al numero menos del decimal. */


/* Math.ceil() */

var numeroAleatorio3 = document.querySelector("#numeroAleatorio3");
var numero3 = 0;

numero3 = Math.ceil(Math.random()*100);
numeroAleatorio3.innerHTML = numero3;

/* Aqui utilizamos la propiedad "Math.ceil", con esta al añadirsela al "Math.random" conseguimos que nos redondee los numeros decimales a numeros enteros. Este redondea al numero mayor del decimal. */


/* Math.round() */

var numeroAleatorio4 = document.querySelector("#numeroAleatorio4");
var numero4 = 0;

numero4 = Math.round(Math.random()*100);
numeroAleatorio4.innerHTML = numero4;

/* Aqui utilizamos la propiedad "Math.round", con esta al añadirsela al "Math.random" conseguimos que nos redondee los numeros decimales a numeros enteros. Este redondea al numero entero mas proximo. Es decir, si el decimal es 6.6 entonces redondeara a 7 ya que el numero despues del punto es mayor que 5, si fuese 6.3 entonces redondeara a 6 */
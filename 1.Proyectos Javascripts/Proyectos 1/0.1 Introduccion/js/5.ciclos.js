/*=============================================
=                   CICLOS            =
=============================================*/

/* CICLO FOR */

for(var i = 0; i < 5; i++){

 console.log("i", i);

}

/* En este tipo de ciclo pasamos 3 parametros dentro de los parentesis y cada parametro se debe separar con un punto y coma(;) estos son: 

El 1re parametro es una variable que se puede iniciar desde el numero que quieras, la (i) puede significar indice o index por esto es lo mas comun verlo asi 

El 2do parametro es el limite de este ciclo o el limite de cuantas veces queremos que se repita dicha tarea

El 3re parametro es para pedir que el indice se vaya incrementando de uno en uno hasta que llegue al limite que hemos colocado como 2do parametro. Por esto siempre vemos en este tipo de ciclo el (i++) */


var cajas = document.querySelectorAll(".cajas");

for(var i = 0; i < cajas.length; i++){

	cajas[i].style.width = "150px";
	cajas[i].style.height = "150px";
	cajas[i].style.background = "blue";
	cajas[i].style.marginTop = "5px";
	cajas[i].style.marginRight = "5px";
	cajas[i].style.display = "inline-block";
} 

/* En este ejemplo aplicando el ciclo FOR modificamos las propiedades de la estructura HTML, los <div> que estan en el DOM. Creamos la variable "cajas", luego usando las propiedades, metodos necesarios y reservados del lenguaje JS vinculamos las etiquetas HTML que tienen como nombre de clase(class) "cajas" para luego introducirlas al ciclo FOR. 

Colocamos los 3 parametros como antes mencionado, el 1re parametro es la variable indice, el 2do parametro en este caso se esta diciendo que "i" no supere o no sea mayor a la cantidad de indices que tiene la variable array "cajas" ya que en la estructura HTML hay 5 <div> con la clase(class) "cajas" por ende estos se vuelven un arreglo(array) y para que no se supere la cantidad que tiene un array en este 2do parametro colocamos el nombre de la variable-array "cajas" seguida de la propiedad "length" y el 3re parametro es para que se incremente de uno en uno el indice 

Colocamos la "i" dentro de corchetes "cajas[i]" por que estamos trabajando con un arreglo(array) y esta es la estructura de los mismos. Al colocar la "i" en cada propiedad que modificara la estructura HTML esto aplicara dichas propiedades a todas las etiquetas( en este caso los <div> ) por igual. En caso de colocarle un valor especifico, es decir ( cajas[0].style.width = "50px"; ) entonces solo se le aplicaria dicha propiedad a ese indice, osea al indice 0 */


/* ----------------------------------------------------------------------------- */


/* CICLO WHILE */
 var n = 1;

 while(n <= 5 ){

 	console.log("n", n);
 	n++;
 
 } 


/* En este ciclo debemos tener o crear una varible global, es decir, una variable por fuera de la tarea o funcion, luego en los parentesis escribimos las instruciones de la tarea y por ultimo dentro de las llaves( {} ) mandamos a ejecutarla. Esta tarea se lee de la siguiente manera: ( n es igual a 1, mientras n sera menor o igual a 5 que n se incremente de uno en uno n++) 

Debemos tener en cuenta que lo que queremos que se imprima en pantalla o lo que veremos en el navegador, en este caso utilizando la consola(console.log) debemos colocarlo antes del incremento, es decir antes del (n++) para que asi se muestre correctamente en pantalla o consola el incremento. La variable que esta por fuera vale 1 entonce debe mostrarme desde el 1 hasta el 5 */

/* ----------------------------------------------------------------------------- */


/* CICLO DO WHILE  */

var p = 1;

do{
	console.log("p", p);
	p++
	
}

while(p <=5 );

/* En este ciclo decimos "mientras sucede esto, quiero que suceda otra cosa" por eso el (do) 

Esta tarea se lee de la siguiente manera: mientras(while) p sea menor o igual a 5 yo quiero(do) que p se vaya incrementando p++ de uno en uno

De igual forma la consola o la tarea se colocan antes del incremento, es decir, antes del p++ */












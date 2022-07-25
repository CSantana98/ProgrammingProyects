/*=============================================
CASO 1. LOS CUATRO ATLETAS. 

De cuatro corredores de atletismo se sabe que C ha llegado inmediatamente detrás de B, y D ha llegado en medio de A y C. ¿Podría usted calcular el orden de llegada?

B -> 1
C -> 2
D -> 3
A -> 4
=============================================*/

/* 1- Creamos el objeto */
var atl = {

	/* 2- Agregamos sus Propiedades. Cada letra le damos el valor de 0 porque no sabemos en que posicion de llegada estan los atletas aun. */
	A:0,
	B:0,
 	C:0,
 	D:0,
 	
 	/* 3- Creamos el metodo */
 	posicionLlegada: function(){

 		/* 4- Creamos la logica que resolvera la tarea en base a cada una de las letras */

 		   /* El atleta C llego despues del atleta B, por ende su numero es mayor ">" */
 		if(atl.C > atl.B &&
 		   /* El atleta D llego despues del atleta B, por ende su numero es mayor ">" */
 		   atl.D > atl.B &&
 		   /* El atleta D llego despues del atleta C, por ende su numero es mayor ">" */
 		   atl.D > atl.C &&
 		   /* El atleta D llego antes del atleta A, por ende su numero es menor "<" */
 		   atl.D < atl.A){

 			/* Si se cumplen las condiciones de arriba, entonces que retorne un valor boleano(boolean) "true", es decir "verdadero" para indicar que si se cumplio. */
 		    return true;	
 		}

 		/* Si no se cumples las condiciones entonces que retorne un valor boleano(boolean) "false", es decir falso. */
 		return false; 
	

 	},

 	/* 6- Creamos otra propiedad dentro de este objeto, esa propiedad sera un "setInterval" para que cada "10 milisegundos" me arroje numeros aleatorios del 1 al 4 en base a los cuatro atletas (A,B,C,D) */
 	intervalo: setInterval(function(){


 		/* 7- Aqui arrojamos los numeros de la posicion de llegada de cada Atleta. Con "Math.ceil" pedimos que nos redondee al numero entero mas proximo hacia arriba ya que con "Math.random" generaremos numeros aleatorios y multiplicando por 4 nos aseguramos que solo salgan numeros del 1 al 4 */
 		atl.A = Math.ceil(Math.random()*4)
 		atl.B = Math.ceil(Math.random()*4)
 		atl.C = Math.ceil(Math.random()*4)
 		atl.D = Math.ceil(Math.random()*4)

 		/* 8- Creamos la condicion para cuando el metodo "posicionLlegada" sea "true", osea verdadero */
 		if(atl.posicionLlegada()){

 			/* 9- Si esta condicon se cumple, entonces con "clearInterval" borramos el intervalo, es decir con esto lo detenemos y en consola mostramos la posicion de los atletas */
 			clearInterval(atl.intervalo);
 			console.log("El Atleta A llego en la "+atl.A+"ta posicion")
 			console.log("El Atleta B llego en la "+atl.B+"ra posicion")
 			console.log("El Atleta C llego en la "+atl.C+"da posicion")
 			console.log("El Atleta D llego en la "+atl.D+"ra posicion")

 		}

 	},10)

}

/*=============================================
CASO 2. CABALLOS. 

El caballo de Mac es más oscuro que el de Smith, pero más rápido y más viejo que el de Jack, que es aún más lento que el de Willy, que es más joven que el de Mac, que es más viejo que el de Smith, que es más claro que el de Willy, aunque el de Jack es más lento y más oscuro que el de Smith. ¿Cuál es el más viejo, cuál el más lento y cuál el más claro?

Respuesta en papel:

Nombres:    Prop 1: Valor 1:     Prop 2:     Valor 2:      Prop 3:  Valor 3:
Mac 	  | edad:    viejo (2) | velocidad:   rapido (2) | tono:     oscuro (2)
Smith	  | edad:    joven (1) | velocidad:   rapido (2) | tono:     claro (1)
Jack	  | edad:    joven (1) | velocidad:   lento (1)  | tono:     oscuro (2)
Willy	  | edad:    joven (1) | velocidad:   rapido (2) | tono:     oscuro (2)

Cuál es el más viejo?: El de Mac 
Cuál el más lento?:    El de Jack
Cuál el más claro?:    El de Smith
=============================================*/

/* 1- Creamos la variable objeto, en mi caso "cabs" de "caballos" */
var cabs = {

	/* 2- Colocamos las propiedades de este objeto, las iniciamos en 0 por que aun no hemos hecho la logica matematica con la que obtendremos los valores y resolverlo como hicimos en papel */	
	Mac: {edad:0, velocidad:0, tono:0},
	Smith: {edad:0, velocidad:0, tono:0},
	Jack: {edad:0, velocidad:0, tono:0},
	Willy: {edad:0, velocidad:0, tono:0},

	/* 3- Creamos el metodo, en mi caso "caballoVLC" de "caballoViejo-Lento-Claro" */
	caballoVLC: function(){

		/* 4- Creamos la logica para resolver el problema y dar valor a las propiedades */	
		if(cabs.Mac.tono > cabs.Smith.tono &&
		   cabs.Mac.velocidad > cabs.Jack.velocidad &&
		   cabs.Mac.edad > cabs.Jack.edad &&
		   cabs.Willy.velocidad > cabs.Jack.velocidad &&
		   cabs.Mac.edad > cabs.Willy.edad &&
		   cabs.Mac.edad > cabs.Smith.edad && 
		   cabs.Willy.tono > cabs.Smith.tono &&
		   cabs.Smith.velocidad > cabs.Jack.velocidad &&
		   cabs.Jack.tono > cabs.Smith.tono){

		/* 4.1- Si se cumple la condicion devuelve un "true" */
		return true;	
		}

		/* 4.2- Si aun no se cumple la condicion entonces retorna un "false" */
		return false;
	},

	/* 5- Creamos el intervalo */
	intervalo: setInterval(function(){

		/* 6- Creamos el algoritmo para sacar numeros aleatorios y redondearlos al entero mas proximo */
		cabs.Mac.edad = Math.ceil(Math.random()*2);
		cabs.Mac.velocidad = Math.ceil(Math.random()*2);
		cabs.Mac.tono = Math.ceil(Math.random()*2);

		cabs.Smith.edad = Math.ceil(Math.random()*2);
		cabs.Smith.velocidad = Math.ceil(Math.random()*2);
		cabs.Smith.tono = Math.ceil(Math.random()*2);

		cabs.Jack.edad = Math.ceil(Math.random()*2);
		cabs.Jack.velocidad = Math.ceil(Math.random()*2);
		cabs.Jack.tono = Math.ceil(Math.random()*2);

		cabs.Willy.edad = Math.ceil(Math.random()*2);
		cabs.Willy.velocidad = Math.ceil(Math.random()*2);
		cabs.Willy.tono = Math.ceil(Math.random()*2);

		if(cabs.caballoVLC()){

			clearInterval(cabs.intervalo);
			console.log("Caballo de Mac", cabs.Mac);
			console.log("Caballo de Smith", cabs.Smith);
			console.log("Caballo de Jack", cabs.Jack);
			console.log("Caballo de Willy", cabs.Willy);



		}

	},1)
	
}


/*=============================================
CASO 3. LOS CUATRO PERROS. 

Tenemos cuatro perros: un galgo, un dogo, un alano y un podenco. Éste último come más que el galgo; el alano come más que el galgo y menos que el dogo, pero éste come más que el podenco. ¿Cuál de los cuatro perros come menos?.

Respuesta en papel:

Perros:   Prop 1: Valor 1:
Galgo	  comer:  flaco (1)
Dogo	  comer:  gordo (4)
Alano     comer:  gordo (3)
Podenco   comer:  gordo (2)

Cuál de los cuatro perros come menos?: El Galgo
=============================================*/

/* Creamos la variable objeto */
var raza = {

	/* Creamos las propiedades del objeto */
	Galgo:0,
	Dogo:0,
	Alano:0,
	Podenco:0,

	/* Creamos el metodo */
	comer: function(){

		if(raza.Podenco > raza.Galgo &&
		   raza.Alano > raza.Galgo &&
		   raza.Alano < raza.Dogo &&
		   raza.Dogo > raza.Podenco){

			return true;	
		}
		return false;
	},

	intervalo: setInterval(function(){

		raza.Galgo = Math.ceil(Math.random()*4);
		raza.Dogo = Math.ceil(Math.random()*4);
		raza.Alano = Math.ceil(Math.random()*4);
		raza.Podenco = Math.ceil(Math.random()*4);

		if(raza.comer()){

			clearInterval(raza.intervalo);
			console.log("Galgo", raza.Galgo);
			console.log("Dogo", raza.Dogo);
			console.log("Alano", raza.Alano);
			console.log("Podenco", raza.Podenco);

			if(raza.Galgo == 1){
				console.log("La raza con menos apetito es galgo");


			}else if(raza.Dogo == 1){
				console.log("La raza con menos apetito es dogo");

			}else if(raza.Alano == 1){
				console.log("La raza con menos apetito es alano");

			}else{
				console.log("La raza con menos apetito es podenco");

			}

		}

	},10)

}
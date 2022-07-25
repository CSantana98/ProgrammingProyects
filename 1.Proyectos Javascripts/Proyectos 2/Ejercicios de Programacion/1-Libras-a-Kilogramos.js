let ejercicio1 = "----------ESTE ES EL EJERCICIO #1----------"

console.log(ejercicio1);

//FORMA 1 - YO

let libras = 160;
let formula = 2.2046;
let kilogramos = libras / formula;

//Para redondear este resultado podemos hacer lo siguiente
kilogramos = kilogramos * 100;
kilogramos = Math.round(kilogramos);
kilogramos = kilogramos / 100;

console.log("La cantidad en Kilogramos es: " + kilogramos);


//FORMA 2 - INSTRUCTOR

let lb = 160;
let kg = lb / 2.2046;

//Para redondear este resultado podemos hacer lo siguiente
kg *= 100;
kg = Math.round(kg);
kg /= 100;

console.log(kg);

//Nota: Colocar "*= 100 o /= 100" es igual que decir "kg = kg * 100" es solo una forma de simplificar el codigo al momento de realizar operaciones matematicas.
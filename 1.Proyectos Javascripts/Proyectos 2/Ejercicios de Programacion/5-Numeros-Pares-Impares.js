let ejercicio5 = "----------ESTE ES EL EJERCICIO #5----------"

console.log(ejercicio5);

let numeroParesImpares = [1, 6, 8, 4, 2, 7, 10, 3, 5];

for (let i = 0; i < numeroParesImpares.length; i++) {

    let numero = numeroParesImpares[i];

    if ((numero % 2) === 0) {
        console.log(numero + " Es un numero par");
    } else {
        console.log(numero + " Es un numero impar");
    }

}
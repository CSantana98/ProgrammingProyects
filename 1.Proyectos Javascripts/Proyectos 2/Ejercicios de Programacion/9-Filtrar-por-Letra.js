let ejercicio9 = "----------ESTE ES EL EJERCICIO #9----------"
console.log(ejercicio9);

let heroess = ['Doom', 'Dr. Strange', 'Hulk', 'She Hulk', 'Spiderman', 'Captain Marvel'];
let heroesCon = filtrarPorLetra( heroess, 'D');

function filtrarPorLetra ( arreglo, letraHeroe ){

    let nuevoArreglo = [];

    for ( i = 0; i < arreglo.length; i++) {

        let nombreHeroe = arreglo[i];

        if (nombreHeroe[0] === letraHeroe) {
            nuevoArreglo.push(nombreHeroe);
        }

    }

    return nuevoArreglo;
}


console.log( heroesCon ); // She Hulk, Spiderman
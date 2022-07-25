let ejercicio8 = "----------ESTE ES EL EJERCICIO #8----------"
console.log(ejercicio8);

let heroes = ['Deadpool', 'Ciclope', 'Magneto', 'Profesor Charles Xavier'];
let heroeLargo = masLargo( heroes );

function masLargo ( arregloHeroes ) {

    let nombreLargo = '';

    for ( let i = 0; i < arregloHeroes.length; i++) {

        let nombre = arregloHeroes[i];

        if (nombre.length > nombreLargo.length) {
            nombreLargo = nombre;
        }

    }

    return nombreLargo;

}


console.log("El heroe con el nombre mas largo es: "+ heroeLargo ); // Profesor Charles Xavier
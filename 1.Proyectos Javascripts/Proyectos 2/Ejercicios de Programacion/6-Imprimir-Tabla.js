let ejercicio6 = "----------ESTE ES EL EJERCICIO #6----------"

console.log(ejercicio6);

for ( let i = 1; i <= 5; i++) {

    let renglon = '';

    for ( let j = 1; j <= 5; j++) {

        renglon += `${ j * i }  `;

    }

    console.log(renglon);

}
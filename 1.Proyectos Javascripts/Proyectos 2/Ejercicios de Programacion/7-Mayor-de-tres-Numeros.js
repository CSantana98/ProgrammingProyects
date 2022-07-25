let ejercicio7 = "----------ESTE ES EL EJERCICIO #7----------"

console.log(ejercicio7);

let mayorNumero = max(5,100,6);

function max(a, b, c) {

    let mayorNumero

    if (a > b) {

        if (a > c) {
            mayorNumero = a;
        } else {
            mayorNumero = c; 
        }
        
    } else {

        if (b > c) {
            mayorNumero = b;
        } else {
            mayorNumero = c;
        }
    }

    return mayorNumero;
    
}

console.log("El numero mayor es: " + mayorNumero);
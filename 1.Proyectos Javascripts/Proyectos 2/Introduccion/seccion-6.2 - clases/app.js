// Las Clases son las mas utiles y se recomienda utilizarlas cuando la tarea a desarrollar es amplia o se haran cambios constantes en la informacion del programa, con las "Clases podremos reutilizar o instanciar sus propiedades y asi con esta sola clase asignarle dichas propiedades a multiples objetos. A diferencia de los "Objetos" que si tenemos que estar modificando la informacion constantemente tendriamos que crear multiples "objetos" cada uno con sus propiedades y se vuelve mas dificil de resolver la tarea de esta forma, mejor utilizar una "clase" con la cual tendremos acceso a todas las propiedades que le asignemos y con estas hacer un cambio masivo en todos los objetos que esten instanciando la "clase"


class Carro {

    //Las clases cuentan con un "constructor" que son las funciones creadoras, son las que contienen las propiedades que tendra las clases. En los parentesis pueden tener incluidos parametros o no
    constructor(marca1, tipo1, puertas) {

        //La propiedades se definen con la palabra reservada "this." seguido del nombre que queremos que tenga como propiedad. Si se usan parametros entonces la propiedad sera igual al nombre que colocamos como parametro
        this.marca = marca1;
        this.tipo = tipo1;
        this.puertas = puertas;

        //como esta propiedad no esta pasada por parametro entonces simplemente sera igual al valor que le otorgemos
        this.creadoEn = 'hoy';
        this.encendido = false;
        this.gasolina = 100;

    }

    encenderCarro() {

        if (this.encendido) {
            console.error('El carro ya estaba encendido... se daño el motor');
        } else {
            this.encendido = true;
            console.log('El carro esta encendido');
        }

        return this;
    }

    realizarViaje(consumo) {

        if (!this.encendido) return console.log('Carro apagdo');

        if (consumo > this.gasolina) return console.log('No puede realizar el viaje: Gasolina ' + this.gasolina);

        this.gasolina = this.gasolina - consumo;
        return 'Le queda ' + this.gasolina;


    }

} // fin clase

let carro = new Carro('Mazda', 'Sedan', 2);


console.log(carro);
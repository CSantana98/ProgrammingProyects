import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {

  palabra = 'CHRISTOPHER';
  palabraOculta = '';

  intentos = 0;

  gana = false;
  pierde = false;

  letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
  'K', 'L', 'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S',
  'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
  
  constructor(){
    
    this.palabraOculta = '_ '.repeat(this.palabra.length);

  }

  comprobar( letra: string ){

    this.existeLetra(letra);

    const palabraOcultaArry = this.palabraOculta.split(' ');
    
    for (let i = 0; i < this.palabra.length; i++){

      if( this.palabra[i] === letra ){
        palabraOcultaArry[i] = letra;
      }

    }

    this.palabraOculta = palabraOcultaArry.join(' ');
    this.verificaGane();

  }

  verificaGane(){

    const palabraArry = this.palabraOculta.split(' ');
    const palabraEvaluar = palabraArry.join('');

    if( palabraEvaluar === this.palabra ){
      this.gana = true;
    }

    if( this.intentos >= 9 ){
      this.pierde = true;
    }

  }

  existeLetra ( letra: string ){

    if( this.palabra.indexOf(letra) >= 0 ){
      console.log('La letra existe' + letra);
    }else{
      console.log('La letra NO existe' + letra);
      this.intentos ++;
    }

  }

}

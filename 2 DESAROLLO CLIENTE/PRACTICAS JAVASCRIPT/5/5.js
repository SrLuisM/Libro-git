

/*

Fes un programa que demane el radi, comprove que és un número i si ho és calcule l’àrea de la
circunferència fent ús de PI

Pedir numero (float) radio 
Comrobar que es un numero 
Calcular la area de circunferencia 
Variable Pi 

Forumula 2 * 3.14 * radio (100) -> 628 



*/ 

const radio = prompt("Ingresa un Radio : "); 
// console.log("Has ingresado el Radio :  " + radio); // TIPO
const pi = 3.1416


if (!isNaN (radio) ) { // VALIDAMOS QUE SEA UN NUMERO 
    console.log("Es un numero");
    let formula = 2 * pi * radio
    console.log(parseFloat(formula)); // CONVERTIMOS A FLOAT 

} else {
    console.log("No es un Numero.");

}



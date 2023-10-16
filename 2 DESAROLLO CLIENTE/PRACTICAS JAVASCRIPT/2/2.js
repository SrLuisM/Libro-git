

/*

Fes un programa que demane un número i comprove si és un número enter

Programa pida un numero y comprobar si es entero 

Prompt Numero 

*/ 

let numero = prompt("Inngresa un Numero para validar si es entero : "); 
console.log("Numero ingresado : " + numero);

if (numero >= 0 && numero % 1){
    console.log("EL numero " + numero + " SI ES un numero Entero")
} else {
    console.log("EL numero " + numero + " NO es un numero entero")
}


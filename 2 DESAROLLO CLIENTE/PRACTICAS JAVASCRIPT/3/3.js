

/*

Fes un programa que demane un número, que comprove si realment és un número i redondege a dos
xifres decimals

Pedir un numero, comprobar si es un numero 
redondear a dos deciales .:f 



*/ 

let numero = prompt("Ingresa un Numero : ");
console.log("Numero ingresado : " + numero);    

if (parseFloat(numero)) {
    console.log("Has ingresado un Numero.")
    let formula = Math.round(numero * 100) / 100;
    console.log(formula);

} else {
    console.log("No has ingresado un Numero.")
}
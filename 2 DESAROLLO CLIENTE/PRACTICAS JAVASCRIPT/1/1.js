

/*

Fes un programa que demane una número entre 0 i 50 i retorne el seu quadrat

Pedir un numero entre 0 y 50 y retornar su numero cuadrado

if 0 a 50 



*/ 

let numero = prompt("Ingresa un Numero del 0 Hasta el 50 : ");
console.log("Numero Ingresado : " + numero);

if (numero >=0 && numero <= 50) { // MINIMO 0 Y MAXIMO 50
    let formula = numero ** 2
    console.log(formula)
    
} else {
    console.log("Tienes que ingresar un numero entre 0 y 50")
}



/*

Fes un programa que demane un número enter, comprove si ho és i el convertisca en un float

Pide un numero entero, comprobar si es numero entero , convertir a float 

*/ 

const numero = parseInt(prompt("Ingresa un Numero : ")); // PREGUNTA



if (parseInt(numero)) { // VALIDO UN NUMERO ENTERO
    console.log("Has ingresado un numero. ")
    console.log(parseFloat(numero));
} else {
    console.log("No es valido lo que has introduccido. ");

}

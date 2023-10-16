// STRING
var mensaje  = "Hola Mundo desde JavaScript";

console.log(mensaje);

mensaje = 10.5;
console.log(typeof mensaje);

// INT 
var numero = 1000;

console.log(numero); 


// OBJETO
var objeto = {
    Nombre : "Luis",
    Apellido : "Muñoz",
    Telefono : "857645345"
};

console.log(objeto);


// BOOLEAN

var bandera = true;
console.log(bandera);

// FUNCION
function miFuncion() {
}
console.log(miFuncion)


// SYMBOL

var simbolo = Symbol("Mi Simbolo");
console.log(simbolo);


// CLASES DE FUNCION

class Persona{
    constructor(nombre,apellido) {
    this.nombre = nombre;
    this.apellido = apellido;
    }   
}

console.log(Persona);

// UNDERFINE

var x;
console.log(x);


// NULL

var y = null;
console.log(y);
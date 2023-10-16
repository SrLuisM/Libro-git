

/*

Fes un programa que demane dos números, comprove quin és el major i el menor, faça la divisió i
mostre el resultat total, el de la part entera i el resto.

Pedir dos numeros 
Comprobar quien es el myor  
Comprobar quien es el menor 
Hacer division de los dos numeros 
Sacar entera y resto 



*/ 

let primerNumero = parseFloat(prompt("Ingresa primero Numero : ")); // 100 
let segundoNumero = parseFloat(prompt("Ingresa segundo Numero : ")); // 200
let mayor, menor;

if (primerNumero > segundoNumero) {
    mayor = primerNumero;
    menor = segundoNumero;

} else if (segundoNumero > primerNumero) {
    mayor = segundoNumero;
    menor = primerNumero;


} else {
    console.log("Los numeros son Iguales")
}

console.log("El numero mayor es : " + mayor)
console.log("El numero menor es : " + menor)

const enteraDivision = mayor / menor 
const restoDivison = mayor % menor

console.log("El numero : " + mayor + " y " + menor + " la Division es : " + enteraDivision)
console.log("El numero : " + mayor + " y " + menor + " el Resto es : " + restoDivison)





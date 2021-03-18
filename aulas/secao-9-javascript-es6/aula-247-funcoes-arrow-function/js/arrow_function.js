// Função anônima comum
// let quadrado = function (x = 5) {
//     return x * x
// }

// Função anônima usando arrow function
// let quadrado = (x) => {
//     return x * x
// }

// Função anônima usando arrow function. Caso a função necessite de apenas um parâmetro não é necessário usar os parênteses. Caso seja a função tenha apenas um retorno, também não é necessário abrir chaves
let quadrado = x => x * x + '<br>' // Retorno implicito

document.write(quadrado(3))

// Função escrita de forma comum
// let parOuImpar = function (numero) {
//     if (numero % 2 === 0) {
//         return 'par'
//     } else {
//         return 'ímpar'
//     }
// }

// Fuunção escrita usando arrow function e operador ternário
let parOuImpar = numero => numero % 2 === 0 ? 'par' : 'ímpar'

document.write(parOuImpar(7))
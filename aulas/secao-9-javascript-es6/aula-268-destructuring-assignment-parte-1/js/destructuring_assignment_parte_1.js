// Destructuring - Desestruturação (array ou objeto)

let frutas = ['Abacaxi', 'Uva', 'Pera', 'Mamão']

// Recuperar valores do array
// let a = frutas[0]
// let b = frutas[1]
// let c = frutas[2]

// Recuperar valores do array usando destructuring
//let [a, b, , c] = frutas // Mater espaço vazio para pular um índice

let [a, b = 'Abacate', c, d, e = 'Banana'] = frutas // Podemos também setar valores default

console.log(a, b, c, d, e)

let coisas = [['Abacaxi', 'Uva', 'Pera', 'Mamão'], ['José', 'Maria']]
let [[, , f3], [, n2]] = coisas

console.log(f3, n2)
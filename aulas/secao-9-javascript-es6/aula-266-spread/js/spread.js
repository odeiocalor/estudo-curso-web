// Contexto spread

// String
let tituloArtigo = 'Como utilizar o operador rest/spread'

console.log(tituloArtigo)
console.log(...tituloArtigo)
// Cada índice do array recebe um caractere
console.log([...tituloArtigo])

// Array
let listaCursos1 = ['NodeJS e MongoDB', 'ES6, TypeScript e Angular 4']
let listaCursos2 = ['Multiplataforma Android/IOS', 'Introdução ao GNU/Linux']
// Espalhamos os valores de listaCursos1 e listaCursos2 em listaCursosCompleto
let listaCursosCompleto = ['Web Completo', 'Android Completo', ...listaCursos1, ...listaCursos2]

console.log(listaCursosCompleto)

// Objetos
let pessoa = { nome: 'João', idade: 27 }
let clone = { endereco: 'Rua Adc', ...pessoa }

console.log(clone)
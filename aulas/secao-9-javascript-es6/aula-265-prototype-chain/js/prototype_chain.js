// O "pai" original: 
// Ao adicionar um atributo ao prototype, todos os objeto filhos dele herdam esse atributo
// Atributo global
Object.prototype.attr50 = 'Z'

let animal = { attr1: 'a' }
// Ao sobrescrever o __proto__ mudamos o pai daquele objeto, fazendo ele herdar os atributos do novo pai
let vertebrado = { __proto__: animal, attr2: 'b' }
// Sobrescrevemos attr2
let ave = { __proto__: vertebrado, attr3: 'c', attr2: 'x' }

console.log(ave.attr1, ave.attr2, ave.attr3, ave.attr50)
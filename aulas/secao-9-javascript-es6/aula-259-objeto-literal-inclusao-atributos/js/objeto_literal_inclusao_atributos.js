// Incluir atributos em um objeto literal após a declaração dele
let pessoa = {
    nome: 'Maria',
    idade: 25,
}

console.log(pessoa)

pessoa.sexo = 'Feminino'

console.log(pessoa)

pessoa.dizerOi = () => console.log('Olá, tudo bem?')

pessoa.dizerOi()
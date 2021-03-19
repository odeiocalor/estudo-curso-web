// Na prática haveria um formulário na página de onde estáriamos recuperando esses valores pelo id dos campos
let nome = 'Jorge'
let idade = 29
let sexo = 'masculino'
let profissão = 'Programador'

// Esse é o modo como declarações de objetos literais eram feitos no JS ES5
let objeto = {
    nome: nome,
    idade: idade,
    sexo: sexo,
    profissão: profissão,
    exibirResumo: function () {
        console.log(`${this.nome}, ${this.idade} anos, sexo ${this.sexo}, é ${this.profissão}`)
    }
}

console.log(objeto)
objeto.exibirResumo()

// Esse é o modo como pode ser feito no JS ES6.
// Como o par: nome/valor tem o mesmo nome, podemos abreviar como feito abaixo, 
// Podemos também eliminar os dois pontos e a palavra function ao declarar uma função
// Ambos os modos geram o mesmo resultado, porém o segundo método diminui o quanto é necessário digitar
let objeto2 = {
    nome, // nome = nome da variável / valor = valor da variável
    idade,
    sexo,
    profissão,
    exibirResumo() {
        console.log(`${this.nome}, ${this.idade} anos, sexo ${this.sexo}, é ${this.profissão}`)
    }
}

console.log(objeto2)
objeto2.exibirResumo()
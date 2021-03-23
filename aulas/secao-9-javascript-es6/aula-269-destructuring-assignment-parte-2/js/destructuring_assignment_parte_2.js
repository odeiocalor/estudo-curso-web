let produto = {
    descricao: 'Notebook',
    preco: 1800,
    detalhes: { // Composição / Atribuir objetos à atributos 
        fabricante: 'abc',
        modelo: 'xyz'
    }
}

// O token do destructor varia
// array => []
// objeto => {}

// Extraindo o valor dos atributos
// let { descricao, preco } = produto

// Assim podemos alterar o nome da variável onde o valor será armazenado
// let { descricao: d, preco: p, desconto } = produto

// Também podemos utilizar valores default
// let { descricao: d, preco: p = 1000, desconto = 5 } = produto

// Extrair atributos de atributos
let { detalhes: { fabricante: f, modelo = 'Não informado' } } = produto

// console.log(d, p, desconto)
console.log(f, modelo)
// Notação do objeto Produto no paradigma de OO
class Produto {
    constructor(descricao, preco) {
        this.descricao = descricao
        this.preco = preco
    }

    verDescricao() {
        console.log(`${this.descricao} por apenas ${this.preco}`)
    }
}

let produto = new Produto('Notebook', 2200)
produto.verDescricao()

// Notação do objeto Produto como um objeto literal
// Objetos literal são comunmente usados quando é necessário apenas um objeto único para a aplicação, não se fazendo necessário a criação de uma classe para apenas 1 ocorrência dela
let produtoLiteral = {
    descricao: 'Geladeira',
    preco: 1800,
    verDescricao: function () {
        console.log(`${this.descricao} por apenas ${this.preco}`)
    }
}

produtoLiteral.verDescricao()
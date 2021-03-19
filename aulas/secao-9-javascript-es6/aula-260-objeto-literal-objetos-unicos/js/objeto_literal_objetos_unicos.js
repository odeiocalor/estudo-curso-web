// Ao armazenar um objeto literal em outra variável, o que está sendo armazenado não é uma cópia do objeto, e sim um "acesso" a esse objeto. Desse modo, ao alterar algum valor por essa nova variável a qual o objeto foi atribuída, o valor será alterado no objeto diretamente.
let assinatura = {
    idCliente: 1000,
    descricao: 'Acesso a internet',
    status() {
        console.log('Ativo')
    }
}

console.log(assinatura.descricao)

let y = assinatura

console.log(y.descricao)

y.descricao = 'Internet + TV + Telefone'

console.log(assinatura.descricao)
console.log(y.descricao)
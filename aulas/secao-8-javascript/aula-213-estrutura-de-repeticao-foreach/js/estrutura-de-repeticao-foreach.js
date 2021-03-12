var listaFuncionarios = ['Viviane', 'Miguel', 'Rosângela', 'Lucas', 'Fernanda']

document.write(listaFuncionarios[3] + '<br>')

// No JS, diferente de outras línguagens de programação, o Foreach é uma função que espera um retorno (valor, índice e array, mas não necessáriamente todos). Percorre apenas índices numéricos.

// listaFuncionarios.forEach(function (valor, indice, array) {
//     console.log('Índice: ' + indice + ' | Valor: ' + valor)

//     if (valor == 'Lucas') {
//         array[indice] = 'Um novo valor'
//     }
// })

// Podemos também encapsular a função que vai retornar parar o Foreach em uuma váriavel, podendo assim reutilizar essa função em outros Foreach's.
var f = function (valor, indice, array) {
    // Retornando no console todos os índice e o valor deles
    console.log('Índice: ' + indice + ' | Valor: ' + valor)

    // Substituindo um dos valores
    if (valor == 'Lucas') {
        array[indice] = 'Um novo valor'
    }
}

listaFuncionarios.forEach(f)

console.log(listaFuncionarios)
document.write(listaFuncionarios[3] + '<br>')
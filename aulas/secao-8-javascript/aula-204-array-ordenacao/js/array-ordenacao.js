var lista_frutas = ['Maçã', 'Uva', 'Banana', 'Morango']

var lista_num = [1, 12, 45, 23, 79, 3]

// Organiza os elementos baseado no valor deles, no caso de strings será em ordem alfabética, e no caso de números, será em ordem crescente, porém baseado na primeira casa no número. 
console.log(lista_frutas.sort())

console.log(lista_num.sort())

// Para organizar os número de forma correta é necessário então "ensinar" a função sort como fazer corretamente.
function ordenaNumeros(a, b) {
    return a - b
    // < 0 = a ordenado antes de b
    // > 0 = b ordenado antes de a
    // == a ordem é mantida
}

console.log(lista_num.sort(ordenaNumeros))
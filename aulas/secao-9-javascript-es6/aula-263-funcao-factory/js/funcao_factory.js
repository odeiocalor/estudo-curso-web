let Bicicleta1 = {
    cor: 'Branca',
    marcha: 'única',
    aro: 12,
    pedalar() { console.log('Método pedalar executado') }
}

let Bicicleta2 = {
    cor: 'Vermalha',
    marcha: '18',
    aro: 26,
    pedalar() { console.log('Método pedalar executado') }
}

console.log(Bicicleta1)
console.log(Bicicleta2)

let BicicletaFactory = function (cor, marcha, aro) {
    // Lógica
    // Requisição http
    // Resposta http
    return {
        cor,
        marcha,
        aro,
        pedalar() { console.log('Método pedalar executado') }
    }
}

let Bicicleta3 = BicicletaFactory('Vermelha', '18', 26)
console.log(Bicicleta3)

console.log(`Cor: ${Bicicleta3.cor}`)
Bicicleta3.pedalar()

let Bicicleta4 = BicicletaFactory('Preta', '21', 29)
console.log(Bicicleta4)
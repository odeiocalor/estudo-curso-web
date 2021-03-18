// Software de marcenária
// Cadeira e sofa

// Exercício de reflexão onde foi feito o mesmo programa nos 2 paradigmas

// Paradigma procedural

// Cadeira

// No paradigma procedural seria necessário criar um array de cadeiras onde seria armazenada cada cadeira, ao ínves de da instânciação quue pode ser feita no paradigma orientado a objetos 

// let cadeiras = Array()

// cadeiras[0] = Array()
// cadeiras[0]['qtd_pernas'] = 4
// cadeiras[0]['giratoria'] = false
// cadeiras[0]['cor'] = 'azul'

// cadeiras[1] = Array()
// cadeiras[1]['qtd_pernas'] = 1
// cadeiras[1]['giratoria'] = true
// cadeiras[1]['cor'] = 'vermelho'

// function gira_cadeira(indice) {
//     if (cadeiras[indice]['giratoria'] === true) {
//         console.log('A cadeira girou')
//     } else {
//         console.log('A cadeira não é giratória')
//     }
// }

// function adicionar_cadeira(qtd_pernas, giratoria, cor) {
//     let cadeira = Array()

//     cadeira['qtd_pernas'] = qtd_pernas
//     cadeira['giratoria'] = giratoria
//     cadeira['cor'] = cor

//     cadeiras.push(cadeira)
// }

// adicionar_cadeira(3, false, 'verde')

// console.log(cadeiras)

// gira_cadeira(1)

// Paradigma OO

class Cadeira {

    constructor(qtd_pernas, giratoria, cor) {
        this.qtd_pernas = qtd_pernas
        this.giratoria = giratoria
        this.cor = cor
    }

    girarCadeira() {
        if (this.giratoria === true) {
            console.log('A cadeira girou')
        } else {
            console.log('A cadeira não é giratória')
        }
    }
}

let cadeiras = Array()

cadeiras.push(new Cadeira(4, true, 'preto'))
cadeiras.push(new Cadeira(4, false, 'marrom'))

console.log(cadeiras)
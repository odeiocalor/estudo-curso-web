var num1 = parseFloat(prompt('Digite o primeiro número da operação: '))
var operacao = prompt('Digite a operação que será feita em texto (soma ou subtração): ')
var num2 = parseFloat(prompt('Digite o segundo número da operação: '))
var resultado

console.log(resultado)

function calc(num1, num2, operacao) {
    switch (operacao) {
        case "soma":
            resultado = (num1 + num2)
            break

        case "subtração":
            resultado = (num1 - num2)
            break

        default:
            document.write('A operação foi inserida incorretamente. Por favor tente novamente.')
            break
    }

    if (resultado != undefined) {
        document.write('O resultado é: ' + resultado + '.')
    }

}

calc(num1, num2, operacao)

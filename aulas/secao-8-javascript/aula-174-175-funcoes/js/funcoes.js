// declaração função
function calcularAreaTerreno(largura, comprimento) {
    //lógica
    var area = parseFloat(largura) * parseFloat(comprimento)

    return area
}

var largura = prompt('Digite a largura do terreno: ')
var comprimento = prompt('Digite o comprimento do terreno: ')

var area = calcularAreaTerreno(largura, comprimento)

document.write('O terreno possui ' + area + ' metros quadrados.')
var lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva']

// Percorrendo um array usando o While
var y = 0
while (y < lista_frutas.length) {
    document.write(lista_frutas[y] + '<br>')
    y++
}

document.write('<hr>')

// Percorrando um array usando o For
for (i = 0; i < lista_frutas.length; i++) {
    document.write(lista_frutas[i] + '<br>')
}
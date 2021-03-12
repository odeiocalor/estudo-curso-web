// Atividade 1
var lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva']

document.write('<h2>Atividade 1</h2>')
for (i = 0; i < lista_frutas.length; i++) {
    document.write(lista_frutas[i] + '<br>')
}
document.write('<hr>')


// Atividade 2
document.write('<h2>Atividade 2</h2>')

var x = 1
var y = 1

while (x <= 10) {

    while (y <= 10) {
        document.write(x + ' x ' + y + ' = ' + (x * y) + '<br>')

        y++
    }

    document.write('<hr>')

    y = 1
    x++
}
// parseInt e parseFloat

var variavel1 = prompt('Digite algum número: ')
var variavel2 = prompt('Digite outro número: ')

variavel1 = parseInt(variavel1)
variavel2 = parseFloat(variavel2)

document.write('<h3>parseInt e parseFloat:</h3><br>')
document.write(variavel1 + variavel2)
document.write('<hr>')

// toString

var variavel1 = 10
var variavel2 = 20
document.write('<h3>toString:</h3><br>')
document.write(variavel1.toString() + variavel2.toString())
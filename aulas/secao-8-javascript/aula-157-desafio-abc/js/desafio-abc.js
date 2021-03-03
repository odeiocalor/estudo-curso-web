// Valores iníciais do desafio

document.write('Valores iníciais:<br><br>')

var a = 10

var b = 20

var c = null // variável auxiliar

// Impressão dos valores iníciais

document.write('A: ' + a + '<br>')
document.write('B: ' + b + '<br>')
document.write('C: ' + c + '<br>')

document.write('<br><hr><br>')

// Resposta do desafio

document.write('Resposta do desafio:<br><br>')

// Variável c recebe o valor da variável b e passa a valer 20
var c = b
// Variável b recebe o valor da variável a e passa a valer 10
var b = a
// Variável a recebe o valor da variável c e passa a valer 20
var a = c
// Voltamos o valor da variável c para null
var c = null

// Impressão da resposta

document.write('A: ' + a + '<br>')
document.write('B: ' + b + '<br>')
document.write('C: ' + c + '<br>')
// Operador lógico E (&&)
document.write('<h2>Operador lógico E (&&)</h2>')
// true && true = true
document.write('2 == 2 && 3 >= 1<br>')
if (2 == 2 && 3 >= 1) {
    document.write('<br>Verdadeiro<br>')
} else {
    document.write('<br>Falso<br>')
}

// true && true && false = false
document.write('<br>2 == 2 && 3 >= 1 && "a" == "b"<br>')
if (2 == 2 && 3 >= 1 && 'a' == 'b') {
    document.write('<br>Verdadeiro<br>')
} else {
    document.write('<br>Falso<br>')
}

// Operador lógico OU (||)
document.write('<h2>Operador lógico OU (||)<br></h2>')
// true || false || false = true
document.write('2 == 2 && 3 >= 7 && "a" == "b"<br>')
if (2 == 2 && 3 >= 7 && 'a' == 'b') {
    document.write('<br>Verdadeiro<br>')
} else {
    document.write('<br>Falso<br>')
}

// false || false || false = false
document.write('<br>3 == 2 && 3 >= 7 && "a" == "b"<br>')
if (3 == 2 && 3 >= 7 && 'a' == 'b') {
    document.write('<br>Verdadeiro<br>')
} else {
    document.write('<br>Falso<br>')
}

// Operador lógico NEGAÇÃO (!)
document.write('<h2>Operador lógico NEGAÇÃO (!)<br></h2>')
// false = true
document.write('!(4 == 2)<br>')
if (!(4 == 2)) {
    document.write('<br>Verdadeiro<br>')
} else {
    document.write('<br>Falso<br>')
}

// true = false
document.write('<br>!(4 == 4)<br>')
if (!(4 == 4)) {
    document.write('<br>Verdadeiro<br>')
} else {
    document.write('<br>Falso<br>')
}

document.write('<hr>')

document.write('<h2>Situação do aluno</h2>')

var nota = prompt('Digite a nota do aluno:')
var faltas = prompt('Digite o número de faltas do aluno:')
var media = 7
var faltas_maximas = 7

if (nota >= media && faltas <= faltas_maximas) {
    document.write('O aluno foi aprovado')
} else {
    document.write('O aluno foi reprovado')
}
// 3 escopos: global, função e o bloco

// Variáveis criadas no escopo global podeem ser visualizadas nos escopos função e bloco. Variáveis criadas no escopo bloco sofrem hoist/elevação e podem ser visualizadas no escopo global, e sendo assim, no escopo função. Variáveis criadas no escopo função não sofrem elevação, por tanto só podem ser visualizadas no escopo função.

var serie = 'The Office'

// escopo de bloco
if (true) {
    var serie2 = 'Game of Thrones'
    document.write(serie)
}

document.write('<br>')

// escopo de função
function x() {
    var serie3 = 'The Walking Dead'
    document.write(serie)
    document.write(serie2)
}

x()

//escopo global

document.write(serie2)
document.write(serie3)

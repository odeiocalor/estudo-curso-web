var lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva']

var auxiliar = lista_frutas.indexOf('Banana')

if (auxiliar === -1) {
    console.log('Elemento não existe')
} else {
    console.log('Elemento existe e está na posição ' + auxiliar.indexOf('Uva'))
}



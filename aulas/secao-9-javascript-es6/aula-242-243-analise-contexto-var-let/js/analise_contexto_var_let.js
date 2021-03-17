console.log('Análise de Contexto - var')

var serieVar = 'The Walking Dead'

{
    var serieVar = 'Breaking Bad'
    console.log('dentro do bloco: ' + serieVar)
}

console.log('fora do bloco: ' + serieVar)

console.log('---------------------------')

console.log('Análise de Contexto - let')

let serieLet = 'The Walking Dead'

{
    let serieLet = 'Breaking Bad'
    console.log('dentro do bloco: ' + serieLet)
}

console.log('fora do bloco: ' + serieLet)
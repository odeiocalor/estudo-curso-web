// sintaxe: var <nomeVar> = <condicao> ? <verdadeiro> : <falso>

var nota = prompt('Digite a nota do aluno:')
var faltas = prompt('Digite o número de faltas do aluno:')
var media = 7
var faltas_maximas = 15

var resultado = (nota >= media && faltas <= faltas_maximas) ? 'Aprovado' : 'Reprovado'
document.write(resultado)
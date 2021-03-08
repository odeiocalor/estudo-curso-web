// Instância do objeto Date. Recupera data do computador do usuário
var data = new Date()

// Recupera o dia
document.write(data.getDate())

document.write('<br>')

// Recupera o mês
document.write(data.getMonth() + 1)

document.write('<br>')

// Recupera o ano
document.write(data.getFullYear())

document.write('<br>')

// Data completa
document.write(data.getDate() + '/' + (data.getMonth() + 1) + '/' + data.getFullYear())

document.write('<br>')

// Recupera a hora
document.write(data.getHours())

document.write('<br>')

// Recupera os minutos
document.write(data.getMinutes())

document.write('<br>')

// Recupera os segundos
document.write(data.getSeconds())

document.write('<br>')

// Hora completa
document.write(data.getHours() + ':' + data.getMinutes() + ':' + data.getSeconds())

document.write('<hr>')

// Adicionar/remover dias
document.write(data.toString())
document.write('<br>')
data.setDate(data.getDate() + 720)
document.write(data.toString())

document.write('<br>')

// Adicionar/remover meses
data.setMonth(data.getMonth() + 5)
document.write(data.toString())

document.write('<br>')

// Adicionar/remover anos
data.setFullYear(data.getFullYear() + 10)
document.write(data.toString())

document.write('<hr>')

// Calcular diferença entre uma data e outra
// 15/01/2017
var data1 = new Date(2017, 0, 15)

// 23/02/2017
var data2 = new Date(2017, 1, 23)

document.write(data1.toString())
document.write('<br><br>')
document.write(data2.toString())
document.write('<br><br>')
// Converter datas para algo que possamos calcular
document.write(data1.getTime())
document.write('<br><br>')
document.write(data1.getTime())
document.write('<br><br>')
// Diferença entre 1 de janeiro de 1970 (padrão computacional) e data inserida em milisegundos

// Encontrar a qtd de milissegundos entre data1 e data2
var milissegundos_entre_datas = Math.abs(data1.getTime() - data2.getTime())
document.write(milissegundos_entre_datas)

// 1 dia tem 24h
// 1 hora tem 60min
// 1 minuto tem 60seg
// 1 segundo tem 1000 milissegundos
// Quantos milissegundos tem 1 dia?
var milissegundos_por_dia = (1 * 24 * 60 * 60 * 1000)
document.write('1 dia tem: ' + milissegundos_por_dia + ' milissegundos')

document.write('<br><br>')

document.write('A diferença entre a data 1 e a data 2 é de: ' + Math.ceil(milissegundos_entre_datas / milissegundos_por_dia) + ' dia(s)')

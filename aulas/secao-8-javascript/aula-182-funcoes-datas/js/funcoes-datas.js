// Instância do método Date. Recupera data do computador do usuário
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

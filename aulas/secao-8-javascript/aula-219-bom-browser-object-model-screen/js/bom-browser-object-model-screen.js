var altura = window.screen.availHeight
var largura = window.screen.availWidth

document.write('A largura do monitor é: ' + largura + '<br>')
document.write('A altura do monitor é: ' + altura + '<br>')

if (largura < 500) {
    document.write('Lógica para impressão do menu mobile')
} else {
    document.write('Lógica para impressão do menu na versão web')
}
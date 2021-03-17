var altura = 0
var largura = 0
var vidas = 3
var tempo = 10

var criaMosquitoTempo = 1500

var nivel = window.location.search
nivel = nivel.replace('?', '')

switch (nivel) {
    case 'normal':
        // 1500
        criaMosquitoTempo = 1500
    case 'dificil':
        // 1000
        criaMosquitoTempo = 1000
    case 'hardcore':
        // 750
        criaMosquitoTempo = 750
}

// Função que identifica quando o usuário altera o tamnho da janela do navegador
function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight
    largura = window.innerWidth
    console.log('largura e altura: ', largura, altura)
}
// Chamamos a função para determinar os valores de altura e largura
ajustaTamanhoPalcoJogo()

// Controle do cronômetro
var cronometro = setInterval(function () {

    tempo -= 1

    if (tempo < 0) {
        clearInterval(cronometro)
        clearInterval(criaMosquito)
        window.location.href = 'vitoria.html'
    } else {
        document.getElementById('cronometro').innerHTML = tempo
    }

}, 1000)

// Função para posicionar a imagem do mosquito em um ponto aleatório da tela
function posicaoRandomica() {
    // Remover o mosquito anterior (caso exista) antes de criar um novo
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove()

        if (vidas === 0) {
            window.location.href = 'fim_de_jogo.html'
        } else {
            document.getElementById('v' + vidas).src = "img/coracao_vazio.png"

            vidas--
        }
    }

    // Criando coordenadas aleatórias dentro do tamanho da janela
    // O decremento no valor é feito para evitar que, devido ao tamanho da imagem, a mesma não seja posicionada fora da tela, criando uma barra de rolagem
    var posicaoX = Math.floor(Math.random() * largura) - 90
    var posicaoY = Math.floor(Math.random() * altura) - 90

    // Operador ternário checa se o valor das variáveis é menor que 0 (caso o valor aleatório sejá menor que 90, ao subtrair os 90, a imagem pode ser gerada fora da tela do usuário), e caso seja, a torna 0
    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log('posicaoX e posicaoY: ', posicaoX, posicaoY)

    // Criar o elemento html de forma dinâmica
    var mosquito = document.createElement('img')
    mosquito.src = 'img/mosquito.png'
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio()
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'
    mosquito.onclick = function () {
        this.remove()
    }

    document.body.appendChild(mosquito)
}

// Função para gerar a imagem do mosquito em tamanhos aleatórios
function tamanhoAleatorio() {
    var classe = Math.floor(Math.random() * 3)

    switch (classe) {
        case 0:
            return 'mosquito1'
        case 1:
            return 'mosquito2'
        case 2:
            return 'mosquito3'
    }
}

// Função para decidir para qual lado o mosquito estará virado
function ladoAleatorio() {
    var classe = Math.floor(Math.random() * 2)

    switch (classe) {
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}
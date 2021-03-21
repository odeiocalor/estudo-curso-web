let Carro = function () {
    this.cor = 'Amarelo'
    this.modelo = 'Chevette'
    this.velocidadeAtual = 0
    this.velocidadeMaxima = 180

    this.acelerar = function () {

        let velocidade = this.getVelocidadeAtual() + 50
        if (velocidade > this.velocidadeMaxima) {
            velocidade = this.velocidadeMaxima
        }
        this.setVelocidadeAtual(velocidade)
    }

    this.getVelocidadeAtual = function () {
        return this.velocidadeAtual
    }
    this.setVelocidadeAtual = function (velocidadeAtual) {
        this.velocidadeAtual = velocidadeAtual
    }
}

let carro = new Carro()

console.log(carro.getVelocidadeAtual())
carro.acelerar()
console.log(carro.getVelocidadeAtual())
carro.acelerar()
console.log(carro.getVelocidadeAtual())
carro.acelerar()
console.log(carro.getVelocidadeAtual())
carro.acelerar()
console.log(carro.getVelocidadeAtual())
carro.acelerar()
console.log(carro.getVelocidadeAtual())
carro.velocidadeMaxima = 280
carro.acelerar()
console.log(carro.getVelocidadeAtual())
carro.acelerar()
console.log(carro.getVelocidadeAtual())

let Carro2 = function () {
    var velocidadeMaxima = 180
    var quilometrosRodados = 0

    this.cor = 'Amarelo'
    this.modelo = 'Chevette'
    this.velocidadeAtual = 0

    this.acelerar = function () {
        let velocidade = this.getVelocidadeAtual() + 50
        if (velocidade > velocidadeMaxima) {
            velocidade = velocidadeMaxima
        }
        this.setVelocidadeAtual(velocidade)

        setQuilometrosRodados(0.07)
        console.log(quilometrosRodados)
    }

    this.getVelocidadeAtual = function () {
        return this.velocidadeAtual
    }

    this.setVelocidadeAtual = function (velocidadeAtual) {
        this.velocidadeAtual = velocidadeAtual
    }

    var setQuilometrosRodados = function (q) {
        quilometrosRodados += q
    }
}

let carro2 = new Carro2()

console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())
carro2.acelerar()
console.log(carro2.getVelocidadeAtual())

console.log(carro)
console.log(carro2)
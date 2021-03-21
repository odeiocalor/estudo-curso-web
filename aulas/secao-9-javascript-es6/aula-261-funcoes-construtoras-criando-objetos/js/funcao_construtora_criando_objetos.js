let Carro = function () {
    this._cor = 'Amarelo'
    this._modelo = 'Chevette'
    this._velocidadeAtual = 0
    this._velocidadeMaxima = 180

    this.acelerar = function () {

        let velocidade = this.getVelocidadeAtual() + 10
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

console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()} km/h`)

carro.acelerar()

console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()} km/h`)

carro.acelerar()
carro.acelerar()

console.log(`A velocidade atual é: ${carro.getVelocidadeAtual()} km/h`)
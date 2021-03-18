class Animal {
    constructor(cor, tamanho, peso) {
        this.cor = cor
        this.tamanho = tamanho
        this.peso = peso
    }

    dormir() {
        console.log('Dormir')
    }
}

class Passaro extends Animal {
    constructor(bico, cor, tamanho, peso) {
        super('Verde', cor, tamanho, peso)
        this.bico = bico
    }

    voar() {
        console.log("Voar")
    }
}

class Papagaio extends Passaro {
    constructor(sabeFalar, bico, cor, tamanho, peso) {
        super(bico, cor, tamanho, peso)
        this.sabeFalar = sabeFalar
    }

    falar() {
        console.log('Falar')
    }
}

let papagaio = new Papagaio(true, 'Médio', 'Verde', 25, 350)
console.log(papagaio)

let papagaio2 = new Papagaio(false, 'Pequeno', 'Vermelho', 35, 420)
console.log(papagaio2)
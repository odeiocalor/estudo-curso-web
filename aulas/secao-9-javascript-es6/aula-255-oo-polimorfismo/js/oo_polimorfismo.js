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
        super(cor, tamanho, peso)
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

class Avestruz extends Passaro {
    constructor() {
        super('Grande', 'Branco e preto', 250, 15000)
    }

    enterrarCabeca() {
        console.log('Enterrar a cabeça')
    }

    voar() {
        console.log('Avestruz não sabe voar')
    }
}

let papagaio = new Papagaio(true, 'Médio', 'Verde', 25, 350)
papagaio.voar()

let avestruz = new Avestruz()
avestruz.enterrarCabeca()
avestruz.voar()

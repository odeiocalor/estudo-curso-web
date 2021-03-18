// Modelo da objeto
class ContaBancaria {

    // Atributos/Características
    // Ao usar o this nos criamos as variáveis que guardaram nossos valores atreladas ao objeto onde ela está sendo criada, ao invés de deixá-las soltas dentro do nosso código
    constructor() {
        this.agencia = 1075
        this.numeroConta = 8351125
        this.saldo = 50
        this.limite = 450
    }

    //Métodos
    depositar(valorDeposito) {
        this.saldo += valorDeposito
    }

    sacar(valorSaque) {
        this.saldo -= valorSaque
    }

    consultarSaldo() {
        return this.saldo
    }
}

// Criando instâncias do objeto "ContaBancaria"
let x = new ContaBancaria()
let y = new ContaBancaria()

// Chamando o método "consultarSaldo" do objeto ContaBancaria instânciado na variável x
console.log(x.consultarSaldo())

// Chamando o método "depositar" e inserindo o valor a ser depositado
x.depositar(450)

// Chamando o método "consultarSaldo" para checar o saldo após o deposito
console.log(x.consultarSaldo())

x.sacar(200)

// Chamando o método "consultarSaldo" para checar o saldo após o saque
console.log(x.consultarSaldo())

// O saldo da instância armazenada na variável y continua inalterada pois apenas mudamos os valores da instância armazenada na variável x
console.log(y.consultarSaldo())
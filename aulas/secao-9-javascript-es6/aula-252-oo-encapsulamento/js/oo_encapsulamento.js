// O encapsulamento ainda não é suportado pelo JS ES6, porém existem convenções (formas de se escrever o código), que demonstram a intenção de encapsular. Essa convenção é o uso do "_" antes do nome do atributo. Isso não impede o programador de chamar o atributo diretamente, mas sinaliza ao programador que é recomendado usar o getters e setters. 

class Tv {
    constructor() {
        // Em linguagens que suportam encapsulamento essa seria uma forma de encapsular
        // private this.relacaoCanais = Array(2, 4, 5, 7, 10)
        this._relacaoCanais = Array(2, 4, 5, 7, 10)
        this._canalAtivo = 5
        this._volume = 5
    }

    // getters e setters
    // Criam pseudo variáveis, que retornam ou alteram valores dos atributos. Desse modo é possível tornar esses processos mais seguros.
    get canalAtivo() {
        return this._canalAtivo
    }

    set canalAtivo(canal) {
        // Teste para saber se o canal para o qual estamos tentando mudar (na linha 28), existe ou não. Caso não exista ele não muda
        if (this._relacaoCanais.indexOf(canal) !== -1) {
            this._canalAtivo = canal
        }
    }
}

let tv = new Tv()

tv.canalAtivo = 10
console.log(tv.canalAtivo)
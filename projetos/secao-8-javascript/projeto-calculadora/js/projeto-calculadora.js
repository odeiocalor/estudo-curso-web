function calcular(tipo, valor) {
    // Teclas de ações
    if (tipo === 'acao') {
        // Limpar o visar (id resultado)
        if (valor === 'c') {
            document.getElementById('resultado').value = ''
        }

        // Inserir no visor a operação a ser feita
        if (valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.') {
            document.getElementById('resultado').value += valor
        }

        // Recuperar a conta a ser feita, transformar a string em número com o método eval, e inserir o resultado no visor (id resultado)
        if (valor === '=') {
            var valor_campo = eval(document.getElementById('resultado').value)
            document.getElementById('resultado').value = valor_campo
        }

        // Teclas de valores (números)
    } else if (tipo === 'valor') {
        // Inserir no visor (id resultado) o valor da tecla de número 
        document.getElementById('resultado').value += valor
    }


}
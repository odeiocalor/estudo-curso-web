var objetos = []

function adicionarArray() {

    // Recupera o valor digitado no input
    var nomeObjeto = document.getElementById('input-objeto').value

    // Checa se algo foi digitado
    if (nomeObjeto === '' || nomeObjeto === null || nomeObjeto === undefined) {

        // Caso não tenha valor informa o usuário para inserir o valor válido
        alert('Informe um valor válido')

    } else {

        // Caso tenha valor, checa se o valor já foi inserido no array
        var verificarExistencia = objetos.indexOf(nomeObjeto)

        if (verificarExistencia === -1) {

            // Caso não tenha sido inserido, insere o valor, retorna o array no console e limpa o input
            objetos.push(nomeObjeto)
            console.log(objetos)
            document.getElementById('input-objeto').value = ''

        } else {

            // Caso já tenha sido inserido, informa o usuário e limpa o input
            alert('Esse objeto já foi adicionado')
            document.getElementById('input-objeto').value = ''

        }
    }
}

function ordenarArray() {

    // Ordena os valores do array em ordem alfabético
    objetos.sort()

    // Retorna o array no console
    console.log(objetos)
}
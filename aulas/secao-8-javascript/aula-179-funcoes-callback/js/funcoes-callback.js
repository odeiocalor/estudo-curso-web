function exibirArtigo(id, callbackSucesso, callbackErro) {
    // lógica: recuperar o id via requisição http
    if (true) {
        callbackSucesso('Funções de callback em JS', 'Funções de callback são muito utilizadas...')
    } else {
        callbackErro('Erro ao recuperar os dados')
    }
}

// Método funcional porém não eficiente
// exibirArtigo(1, function() { ... }, function() { ... })

// Método mais funcional

// Funções anônimas encapsuladas em variáveis
var callbackSucesso = function (titulo, descricao) {
    document.write('<h1>' + titulo + '</h1>')
    document.write('<hr>')
    document.write('<p>' + descricao + '</p>')
}

var callbackErro = function (erro) {
    document.write('<p><strong>Erro: <strong>' + erro + '</p>')
}

exibirArtigo(1, callbackSucesso, callbackErro)
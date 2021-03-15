function soma() {
    var resultado = 0
    for (var i in arguments) {
        resultado += arguments[i]
    }

    return resultado
}

console.log(soma(7, 5, 3.2, 0.8, 'Texto'))
// Contexto rest
// Indicamos que soma() receberá ...param, o que vai transformar os diversos valores declarados na chamada da função em um array
function soma(...param) {
    let resultado = 0

    console.log(param)

    param.forEach(v => resultado += v)

    return resultado
}

console.log(soma(3, 8, 5, 7))

// Indicamos que multiplicacao() receberá 2 paramêtros, m e ...p. m será apenas 1 valor, enquanto ...p, será um array criado usando o operador rest/spread
function multiplicacao(m, ...p) {
    // console.log(m)
    // console.log(p)
    let resultado = 0

    p.forEach(v => resultado += m * v)

    return resultado
}

console.log(multiplicacao(5, 7, 12, 3, 49))
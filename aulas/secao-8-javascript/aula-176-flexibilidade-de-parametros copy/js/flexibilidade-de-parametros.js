function soma(a, b) {
    a = a === undefined ? 0 : a
    b = b === undefined ? 0 : b
    return a + b
}

console.log(soma(7, 7))
console.log(soma(7, 7, 9, 15)) // Desconsidera os parâmetros adicionais.
console.log(soma(7)) // Parâmetro b é considerado undefined, devolvendo NaN. É necessário tratar o erro dentro da função.
console.log(soma()) // Ambos os parâmetros serão considerados undefined, devolvendo NaN.
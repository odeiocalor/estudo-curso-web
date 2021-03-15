// setTimeout(function () { document.write('Teste<br>') }, 2000)

var i = 5

// Inline. Necessário usar ";" para separar as instruções
// setInterval(function () { document.write(i + '<br>'); i -= 1 }, 2000)

// Ambos funcionam igual, parém quebrando as linhas assim não é necessário usar o ";" para separar as instruções
var x = setInterval(function () {
    document.write(i + '<br>')
    i--

    if (i === 0) {
        clearInterval(x)
        // window.location.reload()
    }
}, 1000)
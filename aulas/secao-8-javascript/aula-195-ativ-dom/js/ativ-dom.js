function mudarEstilo() {
    document.getElementById('entrada').style.background = 'yellow'
}

function validacao() {
    tamanhoString = document.getElementById('entrada').value.length

    if (tamanhoString < 3) {
        document.getElementById('entrada').style.background = 'red'
    } else {
        document.getElementById('entrada').style.background = 'green'
    }

    document.getElementById('entrada').value = ''
}
var x = 1

while (x <= 10) {
    document.write(x + '<br>')

    // continue finaliza a iteração, voltando para o inicio do loop sem executar o que estiver abaixo do continue
    x++
    if (x === 5) {
        continue
    }

    // break finaliza o loop
    // if (x === 5) {
    //     break
    // }

    // x++
}

document.write('fim')
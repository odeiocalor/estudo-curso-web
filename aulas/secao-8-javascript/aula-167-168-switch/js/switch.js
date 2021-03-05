var parametro = prompt('Digite um número inteiro de 1 à 5: ')

switch (parseInt(parametro)) {
    case 1:
        document.write('Parametro 1')
        break

    case 2:
        document.write('Parametro 2')
        break

    case 3:
        document.write('Parametro 3')
        break

    case 4:
        document.write('Parametro 4')
        break

    case 5:
        document.write('Parametro 5')
        break

    default:
        document.write('Default')
}
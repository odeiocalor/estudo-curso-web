// const são usadas para aramazenar valores que não serão alterados durante a execução do script. É boa prática nomeá-las com caracteres maiúsculos. Constantes devem receber válor ao serem declaradas, não poderão ter seu valor alterado durante a execução. Assim como o let, o const não é elevado, podendo ser acessado apenas no seu escopo.

const SERIE = 'Breaking Bad'

function x() {
    const SERIE = 'The Walking Dead'
    console.log('função: ' + SERIE)
}

x()

console.log('global: ' + SERIE)
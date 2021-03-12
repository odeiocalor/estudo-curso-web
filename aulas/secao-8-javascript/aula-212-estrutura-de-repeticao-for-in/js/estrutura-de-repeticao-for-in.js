// var listaConvidados = ['Jorge', 'Jamilton', 'José', 'Ana', 'Maria']

var listaConvidados = []

listaConvidados['a'] = 'Jorge'
listaConvidados[10] = 'Jamilton'
listaConvidados['zebra'] = 'José'
listaConvidados[-1] = 'Ana'
listaConvidados[true] = 'Maria'

console.log(listaConvidados)

// O For in diferente do For ou do While permite percorrer um array inteiro mesmo que os índices do mesmo não sejam números ou números sequênciais.
for (var x in listaConvidados) {
    console.log('Índice: ' + x + ' | Valor: ' + listaConvidados[x])
}
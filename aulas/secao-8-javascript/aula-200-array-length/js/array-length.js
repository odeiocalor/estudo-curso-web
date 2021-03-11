// O atributo Length ao ser usado em um array vai contar o número de índices contido nesse array. É importante notar que pode haver "anomálias" no resultado, caso seu array contenha índices textuais, ou contenha índices vazios, como é o caso do exemplo abaixo.

var lista_frutas = []

lista_frutas[1] = 'Banana'
lista_frutas[2] = 'Morango'
lista_frutas['x'] = 'Maçã'
lista_frutas[4] = 'Uva'

console.log(lista_frutas)

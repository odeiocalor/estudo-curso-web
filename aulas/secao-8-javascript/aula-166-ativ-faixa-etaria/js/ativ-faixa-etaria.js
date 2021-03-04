var idade = prompt('Digite sua idade:')

if (idade >= 0 && idade < 15) {
    document.write('A faixa etária do usuário é: Criança')
} else if (idade >= 15 && idade < 30) {
    document.write('A faixa etária do usuário é: Jovem')
} else if (idade >= 30 && idade < 60) {
    document.write('A faixa etária do usuário é: Adulto')
} else {
    document.write('A faixa etária do usuário é: Idoso')
}
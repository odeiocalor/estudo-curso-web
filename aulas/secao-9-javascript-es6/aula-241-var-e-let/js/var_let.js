// 3 escopos: global, função e bloco

// var declaradas no escopo global podem ser acessadas em qualquer outro escopo. var declaradas dentro de blocos sofrem hoisting (elevação), fazendo elas subirem para o nível superior a elas; sendo assim, caso a variável seja criada dentro de um bloco que está dentro de uma função, essa variável não poderia ser acessada na escopo global, pois ela foi elevada apenas para o escopo da função

// Variáveis declaradas com let preservam o escopo onde foram criadas, assim impossibilitando elas de serem acessadas de outros escopos, evitando possíveis confusões ou sobreposições

if (true) {
    let serie = 'Breaking Bad'
    console.log('bloco: ' + serie)
}

// Retornará um erro, pois variáveis declaradas como let (como é o caso de 'serie'), não sofrem elevação, podendo ser acessada apenas dentro do escopo onde foi criada
console.log('global: ' + serie)
throw new Error('Houve um erro mas não se preocupe, estamos trabalhando nisso agora')

// netflix

var video = Array()

video[1] = Array()
video[1]['nome'] = 'Fullmetal Alchemist'
video[1]['categoria'] = 'Anime'

function getVideo(video) {
    try {
        // lógica
        // http
        console.log(video[0]['nome'])

    } catch (erro) {
        tratarErro(erro)
        console.log('Agora sim podemos tratar o erro')
        throw new Error('Houve um erro mas não se preocupe, estamos trabalhando nisso agora')
    } finally {
        console.log('Sempre passa por aqui(try / catch)')
    }

    // Ao capturar o erro é inteligente registrar esse erro, para que os desenvolvedores saibam que ele aconteceeu e possam estudar o que fazer.
    function tratarErro(e) {
        // lógica para registrar o erro no servidor
        console.log(e)
    }

    console.log('A aplicação não morreu')
}

getVideo(video)
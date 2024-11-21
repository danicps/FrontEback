function explicacao1(){
    // se condicao / senao
    escolha = confirm('DESEJA RODAR TRUE OU FALSE?')

    if (escolha) {
        // console.log('FIZ O SE')
        alert('Voce escolheu true')
    } else{
        // console.log('senao')
        alert('Voce escolheu false')
    }
}

function explicacao2(){
    alert("Seja Bem Vindo a Lojinha!") 
    escolha = prompt('A) Bolo no pote R$ 10, B) Açaí R$ 20, C) Torta R$ 15')

switch(escolha){
    case 'A':
        alert('Voce escolheu bolo no pote')
        break
    case 'B':
        alert('Voce escolheu bolo no acai')
        break
    case 'C':
        alert('Voce escolheu bolo na torta')
        break

    }
}

function explicacao3(){
    // idade = parseInt()
    idade = Number(prompt('Digite a sua idade:'))

        if (idade >= 18){
            alert('Seja bem vindo(a) ao website!')
            // DOCUMENT - DOCUMENTO HTML
            // QUERYSELECTOR - "BUSCADOR"
            // INNERRHTML = "DENTRO DO ELEMENTO"
            document. querySelector('body').innerHTML
            = "oi"

        }else{
            alert('Idade inválida!')
            // WINDOW - JANELA
            // LOCATION - "URL"
            window.location = 'https://www.google.com'
        }
       
}
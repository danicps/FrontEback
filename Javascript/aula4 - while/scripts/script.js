function testes(){
    // enquanto condicao faca 
    // para de tanto ate tanto faca 
    contador = 0

    // while (contador < 3){
    //     alert(`oi!' FIZ ${contador+1} vezes`)
    //     contador++
    // }

        for(var i = 0;i < 3;i++){
            alert(`oi' FIZ ${1} vezes`)
        }
}

// testes()]

function carregarCatalogo(){
    var livros = [
        ['images/livros/Alice.jpg', 'ALICE NO PAÍS DAS MARAVILHAS'],
        ['images/livros/Coraline.jpg', 'CORALINE'],
        ['images/livros/LugarNenhum.jpg', 'LUGAR NENNHUM'],
        ['images/livros/metarmofose.jpg', 'A METARMOFOSE']
    ]
    
    livros.forEach(cadalivro => {
        document.getElementById('catalogo').innerHTML += `
        <div class="livro">
            <img src="${cadalivro[0]}" alt="">
            <h4>${cadalivro[1]}</h4>

        <button>
            Adicionar
            <img src="images/icons/mais.svg" alt="Adicionar">
        </button>
    </div>
        `
    })
}
   
carregarCatalogo()
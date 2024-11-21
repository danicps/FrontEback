function testes(){
    // enquanto condicao faca 
    // para de tanto ate tanto faca 
    contador = 0

    // while (contador < 3){
    //     alert(`oi!' FIZ ${contador+1} vezes`)
    //     contador++
    // }

        for(var i = 0;i < 3;i++){
            alert(`oi' FIZ ${i+1} vezes`)
        }
}

// testes()]

function carregarCatalogo(){
    for (let i = 0;i < 8;i++){
        document.getElementById('catalogo').innerHTML += `
        <div class="livro">
                <img src="images/icons/livros/metarmofose.jpg" alt="">
                <h4>A METARMOFOSE</h4>
        <button>
                    Adicionar
                    <img src="images/icons/mais.svg" alt="">
        </button>
        </div>
        
        `
    }
}

carregarCatalogo()
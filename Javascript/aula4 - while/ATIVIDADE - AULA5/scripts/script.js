function carregarCatalogo(){
    var livros = [
        ['images/charada.jpeg', 'CHARADA'],
        ['images/Eraserhead.jpg', 'ERASERHEAD'],
        ['images/house.jpg', 'HOUSE'],
        ['images/jack.jpg', 'A CASA QUE JACK CONSTRUIU'],
        ['images/taxi driver.jpg', 'TAXI DRIVER'],
        ['images/twin peaks.jpg', 'TWIN PEAKS']


    ]
    
    filme.forEach(cadaFilme => {
        document.getElementById('catalogo').innerHTML += `
        <div class="livro">
            <img src="${cadaFilme[0]}" alt="">
            <h4>${cadaFilme[1]}</h4>

        <button>
            Adicionar
            <img src="images/icons/mais.svg" alt="Adicionar">
        </button>
    </div>
        `
    })
}
   
carregarCatalogo()
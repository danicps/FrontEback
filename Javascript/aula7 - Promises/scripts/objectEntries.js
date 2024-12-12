// OBJECT ENTRIES
const filmes = {
    'Nome' : 'requiem',
    'Desc' : 'Lorem',
    'Gênero' : 'Lorem'
}

console.log(filmes)
console.log(filmes.Nome)
// keys - retorna os atributos (chave)
const filmesKey = Object.keys(filmes)
console.log(filmesKey)

// entries - retorna em listas os valores (valor)
const filmesEntries = Object.entries(filmes)
console.log(filmesEntries)

// map
const nomesFilmes = ['Ilha do Medo', 'Bruxa de Blair', 'Interestelar', 'Velozes e furiosos']

const resultado = nomesFilmes.map((cadaFilme) => {
    console.log(cadaFilme)
})


const listaFilmes ={
    'filmes' : [
        {
            'nome': 'Ilha do Medo',
            'Desc': 'Lorem'
        },
        {
            'nome': 'Bruxa de Blair',
            'Desc': 'Lorem'
        },
    ],
    'jogos': [
        {
            'nome':'Roblox',
            'Desc':'Lorem'
        },
        {
            'nome':'The Last of Us',
            'Desc':'Lorem'
        }
    ]
}

const resultado = lista.jogos.map((elemento) => {
    document.querySelector('body').innerHTML += `
    <h3> ${elemento.nome} </h3>
    `
})
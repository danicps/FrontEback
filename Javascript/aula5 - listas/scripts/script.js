// var fruta1 = 'Melancia'
// var fruta2 = 'Morango'
// var fruta3 = 'Abacaxi'
// var fruta4 = 'Kiwi'
// var fruta5 = 'Maracujá'

fruta = ['Melancia', 'Morango', 'Abacaxi', 'Kiwi', 'Maracujá']

teste = Array()
teste[0] = 'oi'
teste[1] = 'oii'
teste[2] = 'oiii'

console.log(fruta)
console.log(fruta[1])

// PUSH 'EMPURRAR' - ADICIONAR NA LISTA  
fruta.push('Morango')
console.log(fruta)

// UNSHIFT - ADICIONAR NO COMEÇO DA LISTA 
fruta.unshift('Laranja')
console.log(fruta)

// POP - REMOVER O ULTIMO 
fruta.pop()
console.log(fruta)

// SHIFT - REMOVER O PRIMEIRO
fruta.shift()
console.log(fruta)

// SPLICE - REMOVE, ADICIONA E ATUALIZA 
// ONDE?? (INDICE), QUANTOS VOU DELETAR??
// SE NENHUM O QUE VOU ADICIONAR??
fruta.splice(2,3)
fruta.splice(2,0,'Melancia')
fruta.splice(2,0,'Maracujá')
console.log(fruta)

fruta.push('Acerola')

for(var i = 0;i < fruta.lenght; i++){
    document.getElementById('resposta').
    innerHTML += `
    ${fruta[i]} <br>
    `
}

fruta.forEach(cadaFruta =>{
    document.getElementById('resposta').
    innerHTML += `
    ${cadaFruta} <br>
    `
});
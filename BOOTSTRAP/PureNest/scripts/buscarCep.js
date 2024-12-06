document.querySelector('#cep').addEventListener('focusout', buscarCep)
function buscarCep(){
    cep = document.querySelector('#cep').value

    fetch(`https://viacep.com.br/ws/${cep}/json/`).then((info) => {
        return info.json()
    }).then((dados) => {
        console.log(dados)
        document.getElementById('estado').value = dados.estado
    })
    
}
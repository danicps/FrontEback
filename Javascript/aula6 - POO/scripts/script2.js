class Usuario {
//   id, @, email, bio, gênero
constructor(id, apelido, nome, email, bio, genero){
    this.id = id;
    this.apelido = apelido;
    this.nome = nome;
    this.email = email;
    this.bio = bio;
    this.genero = genero;
    this.postar = function(pensamento){
        document.querySelector("#resposta").innerHTML =
        `
      <div class="post">
      <h3>${this.apelido}</h3>
      <p>${pensamento} </p>
      </div>
        
        `
   
       }
    } 
 }

var user1 = new Usuario(1, 'dani', 'Danielle', 'dani@gmail.com', 'estudante', 'feminino')
var user2 = new Usuario(2, 'dani2', 'Daniellezinha', 'dani@gmail.com', 'professor', 'feminino')

function postarFeed(){
    alert("POSTADO COM SUCESSO!")
    pensamento = document.querySelector('#pensamento').value

    user1.postar(pensamento)
}

function carregarPerfil(){
    

}
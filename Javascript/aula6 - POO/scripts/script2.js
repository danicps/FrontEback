class Usuario {
//   id, @, email, bio, gênero
constructor(id, nickname, nome, email, bio, genero){
    this.id = id;
    this.apelido = apelido;
    this.nome = nome;
    this.email = email;
    this.bio = bio;
    this.genero = genero;
    this.postar = function(pensamento){
        document.querySelector("#resposta").innerHTML =
        `
      <div id="post">
      <h3>${this.apelido}</h3>
      <p>${pensamento} </p>
      </div>
        
        `
   
     }
   } 
}

var user1 = new Usuario(1, 'dani', 'Danielle', 'dani@gmail.com', 'estudante', 'feminino')
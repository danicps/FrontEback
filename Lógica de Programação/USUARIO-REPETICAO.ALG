Algoritmo "usuario-Repeticao"

Var
usuarioC, senhaC, usuario, senha, login : caractere


Inicio
usuarioC <- "adm"
senhaC <- "umasenhaincrivel"

// while
enquanto (login = "") faca
    escreval("Digite usuário :")
    leia(usuario)
    escreval("Digite senha : ")
    leia(senha)
    limpaTela()

// controller
   se (senha = senhaC) e (usuario = usuarioC) entao

// interrompa - break
   login <- "correto"
   fimSe
fimEnquanto
limpaTela()
escreval("Login efetuado com sucesso! ")

Fimalgoritmo
Algoritmo "login"

Var
senha , senhaC , email , emailC: caractere

Inicio
senhaC <- "1234"
emailC <- "emailmuitotop@gmail.com"

escreval("Qual � o seu email: ")
  leia(email)
escreval("Qual � a sua senha: ")
  leia(senha)

se (senha = senhaC ) ou (email = emailC) entao
     escreval("Login efetuado com sucesso! Sextou! :) ")
senao
     escreval("Usuario ou senha incorretos! Tente novamente ")
fimSe
Fimalgoritmo
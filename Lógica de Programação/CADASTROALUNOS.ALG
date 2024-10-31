Algoritmo "CadastroAlunos"

Var
alunos : vetor[1..5] de caractere
i : inteiro


Inicio
para i de 1 ate 5 faca
  leia(alunos[i])
fimPara

limpaTela()
escreval("-----LISTA DE ALUNOS-----")

para i de 1 ate 5 faca
     escreval("")
     escreval("---------")
     escreval("Aluno(a)", alunos[i])
     escreval("---------")
     escreval("")
fimPara
Fimalgoritmo
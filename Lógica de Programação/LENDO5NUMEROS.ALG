Algoritmo "lendo5Numeros"

Var
numeros : vetor[1..5] de caractere
i : inteiro


Inicio

escreval("Vamos fazer uma coisa legal? Digite 5 números: ")
para i de 1 ate 5 faca
  leia(numeros[i])
fimPara
limpaTela()

escreval("Agora vamos ver esses números em ordem inversa? ")
para i de 5 ate 1 passo -1 faca
escreval(numeros [i], " ")
fimPara

Fimalgoritmo
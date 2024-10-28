Algoritmo "atividadeTimes"

Var
time1 , time2 : caractere
gols1 , gols2 : inteiro

Inicio

escreval("Digite o nome do primeiro time: ")
leia(time1)
limpaTela()
escreval("Digite o nome do segundo time: ")
leia(time2)
limpaTela

escreval("Digite o número de gols do ", time1, ": " )
leia(gols1)
limpaTela
escreval("Digite o número de gols do ", time2, ": " )
leia(gols2)
limpaTela()

// Verificando o vencedor
se (gols1 > gols2) Entao
   escreval(" Vencedor: ", time1)
senao
se (gols2 > gols1) Entao
   escreval(" Vencedor: ", time2)
senao
   escreval("EMPATE!")
   fimSe
fimSe
Fimalgoritmo
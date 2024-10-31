Algoritmo "valorMercadorias"

Var

mercadoria : vetor[1..3] de caractere
valorMercadoria : vetor [1..3] de real
media : real
total : real
i : inteiro

Inicio

total <- 0
      escreval(" --------MERCADINHO DA DANI-------- ")
para i de 1 ate 3 faca
      escreval("Olá, por favor, digite o nome do produto: ")
leia(mercadoria[i])
      escreval("Digite o valor deste produto: ")
leia(valorMercadoria[i])
limpaTela()
      total <- total + valorMercadoria [i]
fimPara
       escreval("--------CAIXA--------")
       media <- total / 3
       escreval("O valor total das mercadorias é: ", total)
       escreval("A média dessas mercadorias é: ", media )
       escreval("*****MUITO OBRIGADA, VOLTE SEMPRE****** ")

Fimalgoritmo
Algoritmo "docesDaColmeia"
// COMPRA POR QUILO - BOLO
// DESCONTO (DESCONTO POR SITUAÇÃO)
// QUANTIDAE DE UNIDADES - DOCINHO

Var
opcao : caractere
valorTotal : real

Inicio
escreval("***********catálogo************")

escreval("1 - TRUFA                       R$ 8,00 ")
escreval("2 - BOLO NO POTE               R$ 10,00 ")
escreval("3 - COPO DA FELICIDADE         R$ 15,00 ")
escreval("4 - DOCINHO                     R$ 3,00 ")
escreval("5 - PUDIM                      R$ 25,00 ")
escreval("6 - CANCELAR ")
escreval("7 - CARRINHO ")

leia(opcao)
// switch / case

escolha(opcao)
   caso "1"
     escreval(" Item TRUFA X 1  adicionado! ")
     valorTotal <- valorTotal + 8
     escreval(" Valor total do carrinho r$ : ", valorTotal)
   caso "2"
     escreval(" Item BOLO NO POTE X 1  adicionado! ")
     valorTotal <- valorTotal + 10
     escreval(" Valor total do carrinho r$ : ", valorTotal)
   caso "3"
     escreval(" Item COPO DA FELICIDADE X 1  adicionado! ")
     valorTotal <- valorTotal + 15
     escreval(" Valor total do carrinho r$ : ", valorTotal)
   caso "4"
     escreval(" Item DOCINHO X 1  adicionado! ")
     valorTotal <- valorTotal + 3
     escreval(" Valor total do carrinho r$ : ", valorTotal)
   caso "5"
     escreval(" Item PUDIM X 1  adicionado! ")
     valorTotal <- valorTotal + 25
     escreval(" Valor total do carrinho r$ : ", valorTotal)
   caso "6"
     escreval(" Compra cancelada! ")
   outrocaso
     escreval(" Opção inválida! ")

fimEscolha


Fimalgoritmo
Algoritmo "docesDaColmeia"
// COMPRA POR QUILO - BOLO
// DESCONTO (DESCONTO POR SITUA��O)
// QUANTIDAE DE UNIDADES - DOCINHO

Var
opcao, finalizarCarrinho, opcaoFinalizar : caractere
valorTotal : real

// INICIO ADICIONARCARRINHO
 procedimento adicionarAoCarrinho(vp : real)
   VAR
     nomep : caractere
   INICIO
     limpaTela()
     escreval(" Digite o nome do produto: ")
     leia(nomep)
     escreval("Item ", nomep, " adicionado!")
     valorTotal <- valorTotal + vp
     escreval(" Valor total do carrinho r$ : ", valorTotal)
 
 fimProcedimento

// FIM ADICIONARCARRINHO

Inicio
finalizarCarrinho <- "n"
enquanto (finalizarCarrinho = "n") faca
   escreval("***********CAT�LOGO************")
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
        adicionarAoCarrinho (8)
      caso "2"
        adicionarAoCarrinho (10)
      caso "3"
        adicionarAoCarrinho (15)
      caso "4"
        adicionarAoCarrinho (3)
      caso "5"
        adicionarAoCarrinho (25)
      caso "6"
        escreval(" Compra cancelada! ")
      outrocaso
        escreval(" Op��o inv�lida! ")
   fimEscolha
   
   escreval("Deseja adicionar mais alguma coisa? ")
   
   escreval("1- Sim :) ")
   escreval("2- N�o :( ")
   leia(opcaoFinalizar)
   
   se(opcaoFinalizar = "1") entao
     finalizarCarrinho <- "n"
   senao
     finalizarCarrinho <- "s"
   fimSe
   limpaTela()
fimEnquanto

escreval ("----------COMPRA FINALIZADA----------")
escreval ("VALOR TOTAL : R$ ", valorTotal)
escreval ("N� PEDIDO 1542 ")
Fimalgoritmo
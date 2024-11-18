n1 = Number(prompt("Digite o primeiro número"));
n2 = Number(prompt("Digite o segundo número"));
operacao = prompt("Qual é a operação?");
resultado = 0;

switch(operacao){
    case 'soma' :
        resultado = n1 + n2;
        break 

        case 'subtracao' :
        resultado = n1 - n2;
        break 

        case 'multiplicacao' :
        resultado = n1 * n2;
        break 

        case 'divisao' :
        resultado = n1 / n2;
        break 
        default:
            alert("Operação Inválida!")
            break

}
alert("O resultado é: " + resultado)

// var clienteNome = 'leo'
// var clienteCpf = 00000
// var clienteEmail = 'fulano@email.com'
// var clienteTelefone = 90028922
// var clienteTipoConta = 'fisico'
// var clienteSaldo = 0

class Cliente {
    nome;
    dataNascimento;
    cpf;
    email;
    telefone;
    tipoDeConta;
    saldo;
    depositar(valor){
    // this = substitui o nome do cliente
        if (valor < 0){
        console.log(`Operação não permitida!`)
        }else{
            this.saldo += valor
        console.log(`O valor de  ${valor} foi depositado com sucesso!`)
        }
    }

    // argumento - é o valor passado
    // parametro - é a palavra que vai salvar o argumento

    pix(valor){
    
        if (this.saldo <= valor){
            console.log(`Você não tem saldo disponivel!`)
            }else{
                this.saldo -= valor
            console.log(`O pix de valor ${valor} foi efetuado com sucesso!`)
            }
        }
     }      

var cliente1 = new Cliente
cliente1.nome = 'leo'
cliente1.dataNascimento = '11/03/1998'
cliente1.cpf = 85624578906
cliente1.email = 'leozingodgamer@gmail.com'
cliente1.saldo = 0

cliente1.pix(100)

console.log(cliente1)
    
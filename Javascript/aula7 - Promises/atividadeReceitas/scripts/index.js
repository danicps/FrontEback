// Dados das receitas
const receitas = {
    Salgado: [
        {
            titulo: "Empada de Frango",
            descricao: "Empada de massa crocante com recheio cremoso de frango.",
            imagem: "https://cdn0.tudoreceitas.com/pt/posts/7/8/1/empadinha_de_frango_cremosa_9187_orig.jpg",
            ingredientes: [
                "2 xícaras de farinha de trigo",
                "1/2 xícara de manteiga",
                "1/2 xícara de leite",
                "1 peito de frango desfiado",
                "Temperos a gosto"
            ],
            preparo: "Misture os ingredientes da massa, recheie com o frango temperado e asse por 30 minutos."
        },
        {
            titulo: "Coxinha",
            descricao: "Clássica coxinha recheada com frango desfiado.",
            imagem: "https://www.comidaereceitas.com.br/wp-content/uploads/2022/11/coxinha.jpg",
            ingredientes: [
                "1 litro de água",
                "2 xícaras de farinha de trigo",
                "1 colher de manteiga",
                "Frango desfiado para o recheio"
            ],
            preparo: "Prepare a massa com a água e farinha, recheie com frango e frite em óleo quente."
        }
    ],
    Doce: [
        {
            titulo: "Brigadeiro",
            descricao: "Delicioso doce de leite condensado e chocolate.",
            imagem: "https://static.welban.com.br/public/welban/imagens/produtos/brigadeiro-pronto-para-enrolar-500g-doces-italiano-665730e1180cb.jpg",
            ingredientes: [
                "1 lata de leite condensado",
                "2 colheres de chocolate em pó",
                "1 colher de manteiga"
            ],
            preparo: "Misture tudo em uma panela, mexa até desgrudar do fundo e enrole em bolinhas."
        }
    ],
    Suco: [
        {
            titulo: "Suco de Laranja",
            descricao: "Refrescante suco natural de laranja.",
            imagem: "https://agro.estadao.com.br/app/uploads/2024/03/suco-laranja-2.jpg",
            ingredientes: [
                "4 laranjas",
                "500 ml de água gelada",
                "Açúcar a gosto"
            ],
            preparo: "Esprema as laranjas, adicione a água e o açúcar, misture bem e sirva."
        }
    ]
};

// Função para exibir as receitas de uma categoria
function mostrarReceitas(categoria) {
    const receitasContainer = document.getElementById("receitas");
    receitasContainer.innerHTML = ""; // Limpa o conteúdo anterior

    receitas[categoria].map((receita) => {
        const receitaCard = `
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="${receita.imagem}" class="card-img-top" alt="${receita.titulo}">
                    <div class="card-body">
                        <h5 class="card-title">${receita.titulo}</h5>
                        <p class="card-text">${receita.descricao}</p>
                        <button class="btn btn-primary" onclick="abrirModalReceita('${categoria}', '${receita.titulo}')">Saiba Mais</button>
                    </div>
                </div>
            </div>
        `;
        receitasContainer.innerHTML += receitaCard;
    });
}

// Função para abrir o modal com detalhes da receita
function abrirModalReceita(categoria, titulo) {
    const receita = receitas[categoria].find((r) => r.titulo === titulo);

    document.getElementById("modalReceitaLabel").innerText = receita.titulo;
    document.getElementById("modalIngredientes").innerHTML = receita.ingredientes
        .map((ingrediente) => `<li>${ingrediente}</li>`)
        .join("");
    document.getElementById("modalPreparo").innerText = receita.preparo;

    const modal = new bootstrap.Modal(document.getElementById("modalReceita"));
    modal.show();
}

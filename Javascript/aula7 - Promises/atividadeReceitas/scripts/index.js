
const receitas = {
    Salgado: [
      {
        nome: "Empadão de Frango",
        ingredientes: "Frango, creme de leite, massa folhada, temperos",
        preparo: "Misture o frango desfiado com temperos, cubra com massa folhada e asse."
      }
    ],
    Doce: [
      {
        nome: "Brigadeiro",
        ingredientes: "Leite condensado, chocolate em pó, manteiga",
        preparo: "Misture os ingredientes em fogo baixo até engrossar. Modele em bolinhas."
      }
    ],
    Sucos: [
      {
        nome: "Suco de Laranja com Cenoura",
        ingredientes: "Laranja, cenoura, açúcar ou mel",
        preparo: "Bata no liquidificador a laranja e a cenoura com água e coe."
      }
    ]
  };
  

  function exibirReceitas() {
    const container = document.getElementById("receitas");
  
  
    for (const categoria in receitas) {

      const categoriaDiv = document.createElement("div");
      categoriaDiv.classList.add("categoria");
      categoriaDiv.innerHTML = `<h2>${categoria}</h2>`;
  

      receitas[categoria].forEach(receita => {
        const receitaDiv = document.createElement("div");
        receitaDiv.classList.add("receita");
        receitaDiv.innerHTML = `
          <h3>${receita.nome}</h3>
          <p><strong>Ingredientes:</strong> ${receita.ingredientes}</p>
          <p><strong>Modo de Preparo:</strong> ${receita.preparo}</p>
        `;
        categoriaDiv.appendChild(receitaDiv);
      });
  
      container.appendChild(categoriaDiv);
    }
  }
  
  exibirReceitas();
  
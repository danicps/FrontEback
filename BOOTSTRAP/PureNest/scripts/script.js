lista_categorias = []

class Categoria {
    constructor(titulo,img,desc,marca){
        this.titulo = titulo
        this.img = img
        this.desc = desc
        this.marca = marca
    }
}

lista_categorias.push(new Categoria('Frutas','images/alimentação.avif', 'Alimentação Saudável começa em casa. Temos as melhores frutas orgânicas e selecionadas para você!', 'Frutas por @PureNest'))
lista_categorias.push(new Categoria('Queijos','images/queijos.avif', 'Alimentação Saudável começa em casa. Temos os melhores queijos frescos para você!', 'Frutas por @PureNest'))
lista_categorias.push(new Categoria('Castanhas','images/castanhas.avif', 'Alimentação Saudável começa em casa. Mix de castanhas selecionadas!', 'Frutas por @PureNest'))
lista_categorias.push(new Categoria('Grãos e Sementes','images/grãos e sementes.avif', 'Alimentação Saudável começa em casa. Grãos e sementes para turbinar seus pratos de forma saudável!', 'Frutas por @PureNest'))
lista_categorias.push(new Categoria('Chás','images/chás.avif', 'Alimentação Saudável começa em casa. Os melhores chás, naturais e sem conservantes!', 'Frutas por @PureNest'))

lista_categorias.forEach(categoria => {
    document.querySelector('#categoriaItems').innerHTML += `

    <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="${categoria.img}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">${categoria.titulo}</h5>
                    <p class="card-text">${categoria.desc}</p>
                    <p class="card-text"><small class="text-body-secondary">${categoria.marca}</small></p>
                 </div>
              </div>
         </div>
     </div>
 </div>

    `
});

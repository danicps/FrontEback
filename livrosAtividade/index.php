<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<!-- Banner -->
<header class="banner">
      <h1 class="text-center text-white">Livraria da Dani</h1>
    </div>
</div>
    </header>

      <!-- livro 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="livro1.jpg" class="card-img-top" alt="metarmofose">
          <div class="card-body">
            <h5 class="card-title">A metarmofose</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#metarmofoseModal">Ver Detalhes</button>
          </div>
        </div>
      </div>

     <!-- TEXTOS-->

     <div class="modal fade" id="metarmofoseModal" tabindex="-1" aria-labelledby="metarmofoseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="metarmofoseModalLabel"> A metarmofose</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        A Metamorfose é um pequeno livro de autoria do escritor austro-húngaro Franz Kafka. Apesar do texto ter sido feito em 1912 e concluído em apenas 20 dias, ele só foi publicado no ano de 1915.

        Escrita originalmente em alemão, a novela conta a história do caixeiro-viajante Gregor, que um dia acorda metamorfoseado em um enorme inseto.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
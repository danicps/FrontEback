<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria da Dani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Banner -->
    <header class="banner text-center">
        <h1>Livraria da Dani</h1>
    </header>

    <div class="container mt-5">
        <div class="row">

            <!-- Livro 1 -->
            <div class="col-md-4">
                <div class="card book-card">
                    <img src="#" class="card-img-top" alt="A Metamorfose">
                    <div class="card-body">
                        <h5 class="card-title">A Metamorfose</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#metarmofoseModal">Ver Detalhes</button>
                    </div>
                </div>
            </div>

            <!-- Livro 2 -->
            <div class="col-md-4">
                <div class="card book-card">
                    <img src="#" class="card-img-top" alt="Dom Casmurro">
                    <div class="card-body">
                        <h5 class="card-title">Dom Casmurro</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#domCasmurroModal">Ver Detalhes</button>
                    </div>
                </div>
            </div>

            <!-- Livro 3 -->
            <div class="col-md-4">
                <div class="card book-card">
                    <img src="#" class="card-img-top" alt="1984">
                    <div class="card-body">
                        <h5 class="card-title">1984</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ninetyFourModal">Ver Detalhes</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal - A Metamorfose -->
    <div class="modal fade" id="metarmofoseModal" tabindex="-1" aria-labelledby="metarmofoseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="metarmofoseModalLabel">A Metamorfose</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    A Metamorfose é um pequeno livro de autoria do escritor austro-húngaro Franz Kafka. Apesar do texto ter sido feito em 1912 e concluído em apenas 20 dias, ele só foi publicado no ano de 1915.
                    <br><br>
                    Escrita originalmente em alemão, a novela conta a história do caixeiro-viajante Gregor, que um dia acorda metamorfoseado em um enorme inseto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal - Dom Casmurro -->
    <div class="modal fade" id="domCasmurroModal" tabindex="-1" aria-labelledby="domCasmurroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="domCasmurroModalLabel">Dom Casmurro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Dom Casmurro é um romance de Machado de Assis que aborda temas como o ciúme, a dúvida e a traição. A história é narrada por Bento Santiago, um homem que vive atormentado pela dúvida sobre a fidelidade de sua esposa, Capitu.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal - 1984 -->
    <div class="modal fade" id="ninetyFourModal" tabindex="-1" aria-labelledby="ninetyFourModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ninetyFourModalLabel">1984</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    1984 é um romance distópico de George Orwell que apresenta uma sociedade totalitária, onde o governo controla todos os aspectos da vida das pessoas. O protagonista, Winston Smith, luta para manter sua individualidade em um mundo de constante vigilância.
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

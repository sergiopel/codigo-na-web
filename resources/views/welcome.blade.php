<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Código na Web</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* Remove a altura fixa da navbar */
            .navbar {
                display: flex;
                max-width: 100%;
                margin: auto;
            }

            /* Ajuste o logo para dispositivos móveis */
            .navbar-brand img {
                width: 40vw;
                /* Ajustar percentagem conforme necessário */
                height: auto;
                max-width: 250px;
                /* Definir largura máxima */
            }

            /* Posicione os itens da navbar à direita */
            .navbar-nav {
                justify-content: flex-end;
                /* Alinhar itens à direita */
            }

            /* Mantenha classes padrão do Bootstrap para posicionamento */
            .navbar-brand {
                flex-grow: 0;
                flex-shrink: 1;
            }

            .nav-item {
                margin-left: .5rem;
                /* Reduzir margem para dispositivos móveis */
            }

            /* Alinhe os itens à esquerda em dispositivos móveis */
            @media (max-width: 768px) {
                .navbar-brand img {
                    width: 40vw;
                    /* Ajustar largura para telas menores */
                }

                .navbar-nav {
                    justify-content: flex-start;
                    /* Alinhar itens à esquerda em dispositivos móveis */
                }

                .nav-item {
                    margin-left: .3rem;
                    /* Ajustar margem para telas menores */
                }
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ '1.png' }}" alt="Logo" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Dicas</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <h1>Conteúdo da Página 12</h1>
            <p>Este é um exemplo de conteúdo da página.</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

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

        /* Estilo dos links na navbar para torná-los brancos */
        .nav-link {
            color: white !important;
            /* Uso do !important para garantir prioridade */
            ;
            /* Tornar a cor do texto branca */
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

        /* Estilo do rodapé para corresponder ao da navbar */
        .footer {
            background-color: #343a40;
            /* Cor igual ao 'bg-dark' */
            color: white;
            text-align: center;
            padding: 1rem;
            /* Espaçamento no rodapé */
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            /*Mantém a imagem de fundo atrás dos outros elementos */
            background-image: url('{{ 'professional-programmer-working-compress.jpg' }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Camada de sobreposição */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Cor preta com opacidade para criar camada escura */
            z-index: -1;
            /* Mantém a sobreposição atrás dos elementos */
        }

        /* Estilo do conteúdo */
        .content {
            position: relative;
            /* Permite posicionamento em relação à sobreposição */
            z-index: 0;
            /* Garante que o conteúdo esteja acima da sobreposição */
            color: white;
        }
    </style>
</head>

<body>
    <!-- Imagem de fundo -->
    <div class="background-image"></div>

    <!-- Camada de sobreposição -->
    <div class="overlay"></div>

    <!-- Navbar -->
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


    <div class="content container mt-5">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <h1>Este site está sendo desenvolvido com as tecnologias PHP, Laravel e Bootstrap</h1>
                <p>Em breve, postarei meu portfólio e dicas de TI</p>
            </div>
            <div class="col-sm-4">
                <img src="tecnologias4.gif" alt="Descrição da Imagem" class="img-fluid">
            </div>
        </div>
    </div>


    <footer class="footer fixed-bottom">
        <p>© 2024 Código na Web. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

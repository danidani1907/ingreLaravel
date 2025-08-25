<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Venda de Ingressos</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
            background: url('{{ asset("fundo.png") }}') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        header {
            text-align: center;
            padding: 50px 0;
            color: #fff;
            background: rgba(46, 146, 208, 0.72);
        }

        h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .btn-comprar {
            background-color: #735df2ff;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-comprar:hover {
            background-color: #d81b60;
            transform: scale(1.05);
            color: white;
        }

        .event-card {
            background: rgba(255,255,255,0.9);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0,0,0,0.5);
            color: #fff;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <h1>Compre seu ingresso aqui</h1>
        <p>Shows, teatros, eventos e muito mais</p>
    </header>

    <!-- Lista de eventos -->
    <div class="container py-5">
        <div class="row">
            <!-- Evento 1 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="img/show.jpg" alt="show pop">
                    <div class="p-3">
                        <h4>Show pop</h4>
                        <p>15 de Setembro - São Paulo</p>
                        <a href="{{ route('users.create') }}" class="btn-comprar">Comprar Ingresso</a>
                    </div>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="img/teatro.jpg" alt="Peça de Teatro">
                    <div class="p-3">
                        <h4>Peça de Teatro</h4>
                        <p>20 de Outubro - Rio de Janeiro</p>
                        <a href="{{ route('users.create') }}" class="btn-comprar">Comprar Ingresso</a>
                    </div>
                </div>
            </div>

            <!-- Evento 3 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="img/festival.jpg" alt="Festival de Música">
                    <div class="p-3">
                        <h4>Festival de Música</h4>
                        <p>02 de Novembro - Belo Horizonte</p>
                        <a href="{{ route('users.create') }}" class="btn-comprar">Comprar Ingresso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; {{ date('Y') }} Venda de Ingressos - Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

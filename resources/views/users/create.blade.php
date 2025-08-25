<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Venda de Ingressos</title>
</head>
<body>
    <div class="container">
        <div class="container mt-4">
            <h1 class="text-center">Compra de Ingressos</h1>

            <form action="{{ route('users.store') }}" method="post" class="custom-form">
                @csrf

                <div class="mb-3">
                    <label for="name"><i class="bi bi-person-fill"></i> Nome</label>
                    <input type="text" class="form-control custom-input" name="name" id="name" placeholder="Digite seu nome" value="{{ old('name')}}" required>
                </div>

                <div class="mb-3">
                    <label for="email"><i class="bi bi-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control custom-input" id="email" placeholder="Digite seu email" value="{{ old('email')}}" required>
                </div>

                <div class="mb-3">
                    <label for="password"><i class="bi bi-credit-card"></i> Cartão/Senha</label>
                    <input type="password" name="password" class="form-control custom-input" id="password" placeholder="Digite sua senha" required>
                </div>

                <div class="mb-3">
                    <label for="tipo_ingresso">Tipo de ingresso</label><br>
                    <input type="radio" name="tipo_ingresso" value="pista" required> Pista - R$100,00 <br>
                    <input type="radio" name="tipo_ingresso" value="vip"> VIP - R$50,00 <br>
                    <input type="radio" name="tipo_ingresso" value="camarote"> Camarote - R$20,00 <br>
                </div>

                <button type="submit" class="btn custom-button">Finalizar Compra <i class="bi bi-check-circle"></i></button>
            </form>
        </div>
    </div>

    <!-- Modal de Confirmação -->
    <div class="modal fade" id="confirmacaoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-success"><i class="bi bi-check-circle-fill"></i> Compra Confirmada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Sua compra foi realizada com sucesso. 🎉  
                    Em breve você receberá o ingresso no seu e-mail.
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <style>     
        body {
            background-image: url(img/ac.jpg);
            font-family: 'Instrument Sans', sans-serif;
        }

        h1 {
            color: #6f8bceff;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .custom-form {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            max-width: 500px;
            margin: auto;
            border: 1px solid #dee2e6;
        }

        label {
            color: #333;
            font-weight: 500;
        }

        .custom-input {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .custom-input:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 6px rgba(13,110,253,0.3);
        }

        .custom-button {
            background-color: #0d6efd;
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .custom-button:hover {
            background-color: #084298;
            transform: scale(1.03);
        }

        i {
            margin-right: 5px;
            color: #0d6efd;
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para abrir modal se sucesso -->
    @if(session('success'))
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('confirmacaoModal'));
            myModal.show();
        </script>
    @endif
</body>
</html>


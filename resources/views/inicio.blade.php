<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
            }
            label{
                font-size: 20px;
            }
            button{
                font-size: 16px;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Produtos<h1>
            <form action="/cadastrar-produto" method="POST">
                @csrf
                <label for="lblNome">Nome:</label>
                <input type="text" name="nome">
                <br><br>
                <label for="lblValor">Valor:</label>
                <input type="text" name="valor">
                <br><br>
                <label for="lblQuantidade">Quantidade:</label>
                <input type="text" name="estoque">
                <br><br>
                <button>Cadastrar</button>
            </form>      
    </body>
</html>

<!--

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">

<style>
    button {
        display: inline-block;
        margin-right: 100px;
        margin-top: 30em;
        width: 330px;
        height: 50px;
        border: 1px solid gray;
        border-radius: 50px;
        background-color: #23272a;
        cursor: pointer;
    }

    p {
        text-decoration: none;
        color: white;
        font-family: Grape Nuts, sans-serif;
        font-size: 1.7rem;
        margin: 0;
    }

    body {
        margin: 0;
        background-color: #141414;
    }

    button[class="last"] {
        margin-right: 0;
    }

    button:hover {
        background-color: red;
    }

   

</style>
</head>
<body>
<center>

    <button onclick="document.location='/endereco/by-cep'"><p>Endereço por cep</p></button>

    <button onclick="document.location='/logradouro/by-bairro'"><p>Endereço por bairro</p></button>

    <button onclick="document.location='/cidade/by-uf'"><p>Endereço por cidade</p></button>

    <button onclick="document.location='/bairro/by-cidade'"><p>Bairro por cidade</p></button>
    

    <button class="last" onclick="document.location='/cep/by-logradouro'"><p>Cep por logradouro</p></button>

</center>
</body>
</html>


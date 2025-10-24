<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>

    <main class="container">
        <h1>Dados Enviados</h1>

        <?php

            //var_dump($_POST['nome']);

            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobreNome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            echo "<p><strong>o seu nome é</strong> $nome </p>";
            echo "<p><strong>o seu sobrenome é</strong> $sobrenome </p>";
            echo "<p><strong>o seu email é</strong> $email </p>";
            echo "<p><strong>o seu senha é</strong> $senha </p>";

        ?>


    </main>
    
</body>
</html>
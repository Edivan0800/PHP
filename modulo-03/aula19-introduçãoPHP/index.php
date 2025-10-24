<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inrodução PHP</title>
</head>
<body>

    <h1>
        <?php
            echo "hello world";
        ?>
    </h1>

    <h2>variáveis em PHP</h2>

    <p>
        <?php

            $nome = "danilo";
            $sobrenome = "mota";

            echo "nome $nome <br>";
            echo "sobrenome $sobrenome <br>";
            
        ?>
    </p>


    <h2>constantes em PHP</h2>

    <p>
        <?php

            const faculdade = "umc";
            const cidade = "mogi das cruzes";

            echo "faculdade" . faculdade . "<br>";
            echo "cidade" . cidade . "<br>";
            


        ?>
    </p>

</body>
</html>
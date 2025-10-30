<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
    link
</head>
<body>

    <header>
        <nav>

            <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="#">Cadastrar Usuario</a></li>
            <li><a href="verificarusuario.php">Procurar Usuario</a></li>
            </ul>

            
        </nav>
    </header>

    <main>
        <form action="cadastro.php" method="POST">
            <h2>cadastro de aluno</h2>

            <label for="nome">nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="sobrenome">sobrenome:</label>
            <input type="text" name="sobenome" id="sobrenome">

            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email">

            <label for="curso">selecione o curso:</label>
            <select name="curso" id= "curso">
                <option value="ads">analise e desenvolvimento de sistemas </option>
                <option value="es">engenharia de software</option>
                <option value="si">sistema da informção</option>
                <option value="cc">ciencias da computação</option>
            </select>

            <input type="submit" value="cadastrar">

        </form>
    </main>

    <?php
      
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        include("../conexao/conexao.php");

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $curso = $_POST["curso"];

        //criar
        $hoje = new datetime();
        $id = $hoje->formt("Ym") . rand(100,999);


        $sql = "INSERT INTO usuarios (id, nome, sobrenome, email, curso) valeus ( ?,?,?,?,?)"; 
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("issss", "$id,$nome,$sobrenome,$email,$curso");
        $stmt->execute();

        echo "<div class='mensagem sucesso'> usuario cadastrado comsucesso </div>";
        
        $stmt->close();
        $conn->close();
      }

      ?>
    
</body>
</html>

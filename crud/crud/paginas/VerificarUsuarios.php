<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVerificar Usuario</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li> <a href="../index.html">home</a></li>
                <li> <a href="cadastro.php">cadastrar usuario</a></li>
                <li> <a href="#">procurar usuario</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="conteinersection">
            <form action="verificarusuario.php" method="post">
                <input type="email" name="email" id="email" placeholder="informe seu e-mail">
                <input type="submit" value="buscar">
            </form>
        </section>

        <section>
            <?php

            if (isset($_POST["email"])) {
                include("../conexao/conexao.php");
                $email = $_POST["email"];

                $sql = "SELECT * FROM usuarios WHERE email = ?";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $resultado  = $stmt->get_result();

                    if ($resultado->num_rows > 0) {
                        $row = $resultado->fetch_assoc();
                        echo "<table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>id</th>
                                        <th>E-mail</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>{$row['nome']}</td>
                                        <td> {$row['sobrenome']}</td>
                                        <td>{$row['id']}</td>
                                        <td>{$row['email']}</td>
                                        <td>
                                            <form action='ExcluirCadastro.php' method='post'>
                                                <input type='hidden' name='id' value='{$row['id']}>
                                                <input type='submit' id='btn-excluir' value='8#x1f5d1'>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            ";
                    }else {
                        echo "<div class='mensagem erro'>E-mail $email não encontrado </div>";
                    }
                }
            }


            ?>
        </section>

    </main>



</body>

</html>
<?php

    $servername = "localhost"; //ip ou dominio do server 
    $username = "rost"; //usuario no banco de dados 
    $password = ""; //senha do usuario no banco de dados
    $dbname = "faculdade"; 

    //cria a conexão 
    $conn = new mysqli($servername, $username, $password, $dbname);

    //verificar conexão
    if ($conn->connect_error){
        die("conexão falhou");
        
    }

?>
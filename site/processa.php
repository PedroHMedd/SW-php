<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];

    echo "Bom dia <span style='color: red;'> " .  $nome . "</span>";
    echo "<br>";
    echo "Você tem $idade anos de vida";
    echo "<br>";
    echo "Seu email é: " . $email;
    echo "<br>" ;
?>
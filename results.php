<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $morada = $_POST['morada'];
    $cv = $_FILES['cv'];

    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Morada: " . $morada . "<br>";
    echo "CV: " . $cv['name'] . "<br>";

?>
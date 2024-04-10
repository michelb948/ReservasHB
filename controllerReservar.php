<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    require "conn.php";
    
    $nome = $_POST['nome'];
    $equipamento = $_POST['equipamento'];
    $id_equipamento = $_POST['id_equipamento'];
    $aulas = $_POST['aulas'];
    $dias = $_POST['dia'];

    $query = "INSERT INTO reservas (0, nome, equipamento, id_equipamento, aulas, dias) VALUES ($nome, $equipamento, $id_equipamento, $aulas, $dias)";

    $result = $conn->query($query);

    if ($result) {
        header("location: main.php");
    }
    else {
        echo "Falha ao inserir os dados: " . mysqli_error();
    }
};


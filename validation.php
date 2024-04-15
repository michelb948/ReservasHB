<?php
include_once ("config.php");

if (isset($_POST['acessar'])) {
    $cpf = $_POST['cpf'];

    $query = "SELECT * FROM professores WHERE cpf=$cpf";

    $result = $conexao->query($query);

    if ($result->num_rows > 0) {
        header("location: home.php");
    }
    else {
        echo "Esse cpf não está cadastrado no banco, veja se não esqueceu o traço e os pontos";
    }
}





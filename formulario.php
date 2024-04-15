<?php

if (isset($_POST['submit'])) {
    
    include_once ("config.php");
    
    $nome = ($_POST['nome']);
    $equipamento = ($_POST['equipamento']);
    $id_equipamento = ($_POST['id_equipamento']);
    $aulas = ($_POST['aulas']);
    $dia = ($_POST['dia']);

    $result = mysqli_query($conexao, "INSERT INTO reservas1 (nome, email, telefone, sexo, data_nasc) VALUES ('$nome', '$equipamento', '$id_equipamento', '$aulas', '$dia')");

    if ($result) {
        header("location: home.php");
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
</head>
<body>
    <form action="formulario.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Qual seu nome" required>

        <br>
        <br>

        <label for="equipamento">Equipamento:</label>
        <input type="text" name="equipamento" placeholder="Qual equipamento" required>

        <br>
        <br>

        <label for="id_equipamento">Nº equipamento:</label>
        <input type="number" name="id_equipamento" placeholder="Qual o numero do equipamento" required>

        <br>
        <br>

        <label for="aulas">Aulas:</label>
        <input type="text" name="aulas" placeholder="Para quais aulas" required>

        <br>
        <br>

        <label for="dia">Dia:</label>
        <input type="text" name="dia" placeholder="Qual dia" required>
        
        <br>
        <br>

        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>
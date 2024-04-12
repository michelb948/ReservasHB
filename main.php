<?php
require "conn.php";
session_start();
if(!isset($_SESSION['cpf']) == true) {
    unset($_SESSION['cpf']);
    header("location: index.php?msg='sessão não iniciada, fala com os cara!'");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once "controllerDelete.php";
    ?>

    <div class="botoes">
        <button type="click" onclick="location.href='reservar.php'">Reservar</button>
        <button>Editar</button>
    </div>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Equipamento</th>
            <th>Nº do equipamento</th>
            <th>Aula</th>
            <th>Dia</th>
        </tr>
    </table>

    <?php
    require "conn.php";

    $sql = "SELECT * FROM reservas";

    $result = $conn->query($sql);

    while ($user_data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $user_data['nome']. "</td>";
        echo "<td>" . $user_data['equipamento']. "</td>";
        echo "<td>" . $user_data['id_equipamento']. "</td>";
        echo "<td>" . $user_data['aulas']. "</td>";
        echo "<td>" . $user_data['dia']. "</td>";
        echo "</tr>";
    }
    ?>
</body>
</html>
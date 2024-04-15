<?php

if (!empty($_GET['id'])) {
    
    include_once ("config.php");
    
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM reservas1 WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $equipamento = $user_data['email'];
            $id_equipamento = $user_data['telefone'];
            $aulas = $user_data['sexo'];
            $dia = $user_data['data_nasc'];
        }
           
    }
}
else {
    header("location: home.php");
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
    <form action="saveEdit.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="Qual seu nome" required>

        <br>
        <br>

        <label for="equipamento">Equipamento:</label>
        <input type="text" name="equipamento" value="<?php echo $equipamento ?>" placeholder="Qual equipamento" required>

        <br>
        <br>

        <label for="id_equipamento">Nº equipamento:</label>
        <input type="number" name="id_equipamento" value="<?php echo $id_equipamento ?>" placeholder="Qual o numero do equipamento" required>

        <br>
        <br>

        <label for="aulas">Aulas:</label>
        <input type="text" name="aulas" value="<?php echo $aulas ?>" placeholder="Para quais aulas" required>

        <br>
        <br>

        <label for="dia">Dia:</label>
        <input type="text" name="dia" value="<?php echo $dia ?>" placeholder="Qual dia" required>
        
        <br>
        <br>
        <input type="hidden" name="id" value=" <?php echo $id ?>">
        <input type="submit" name="update" id="update">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
</head>
<body>
    <form action="controllerReservar.php" method="POST">
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

        <button type="submit">Reservar</button>
    </form>
</body>
</html>
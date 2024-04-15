<?php
include_once("config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $equipamento = $_POST['equipamento'];
    $id_equipamento = $_POST['id_equipamento'];
    $aulas = $_POST['aulas'];
    $dia = $_POST['dia'];

    $sql = "UPDATE reservas1 SET nome='$nome', email='$equipamento', telefone='$id_equipamento', sexo='$aulas', data_nasc='$dia' WHERE id='$id'";

    $result = $conexao->query($sql);
}
header("location: home.php");
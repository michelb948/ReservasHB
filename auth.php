<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    require "conn.php";

    $cpf = $_POST['cpf'];    
    
    //VALIDATION
    $query = "SELECT * FROM professores WHERE cpf='$cpf'";

    $result = $conn->query($query); 

    if ($result->num_rows == 1) {
        $_SESSION['cpf'] = $cpf;
        header("location: main.php");
    }
    else {
        echo "Login falhou :(: " . mysqli_error();
        unset($_SESSION['cpf']);
    }
}
<?php    
    $host = "localhost";
    $dbname = "reserva";
    $dbusername = "root";
    $dbpassword = "";

    $conn = mysqli_connect($host, $dbname, $dbusername, $dbpassword);

    if ($conn->connect_error) {
        die("Conexão falhou :(, algo de errado não está certo: " . $conn->connect_error);
    }
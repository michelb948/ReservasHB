<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require "conn.php";

    $username = $_POST['user'];
    $password = $_POST['password'];    
    
    //VALIDATION
    $query = "SELECT * FROM professores WHERE nome='$username' AND senha='$password'";

    $result = $conn->query($query); 

    if ($result->num_rows == 1) {
        header("location: main.php");
    }
    else {
        echo "Login falhou :(: " . mysqli_error();
    }
}
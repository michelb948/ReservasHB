<?php
require "conn.php";
$query = "DELETE FROM reservas WHERE id=";
$result = $conn->query($query);
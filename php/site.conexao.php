<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetoMetasTsi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
} else {
    echo "Conectamos no banco!";
}


?>
<?php
$host = "localhost"; 
$username = "id20914341_root"; 
$password = "45.Lalalyy"; 
$database = "id20914341_reservationtable"; 

// Membuat koneksi
$connection = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($connection -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else{
}
?>

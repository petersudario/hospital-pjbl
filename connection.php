<?php
session_start();

$servername = "localhost";
$username = "root"; // PUC => root
$password = "root";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
        die("Conexão falhou: ${$conn->connect_error}");
}

include(dirname(__DIR__) . '/hospital-pjbl/' . "components\\nav.php");

if (!isset($_SESSION["id_username"]) && $_SERVER['REQUEST_URI'] != "/hospital-pjbl/login.php") {
        header("Location: /hospital-pjbl/login.php");
} 

?>

<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "cotacao";

$con = new mysqli($server, $user, $password, $database);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>
  <!-- <script>console.log('Conexão estabelecida com sucesso!');</script> -->
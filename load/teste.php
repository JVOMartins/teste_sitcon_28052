<?php require "../conecta.php";
$result = $_POST['teste'];
echo json_encode(array('teste' => $result));
<?php require "conecta.php";

$nmproc = $_POST['proc'];

$insert = "INSERT INTO procedimentos (descricao) VALUES ('$nmproc')";
$qry = mysqli_query($con,$insert);
if($qry){
    echo json_encode("Inserção realizada com sucesso!");
}else{
    echo json_encode("Falha na inserção.");
}
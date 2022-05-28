<?php require "conecta.php";

$idproc = $_POST['proc'];
$nmforn = $_POST['forn'];
$valor = $_POST['valor'];

$insert = "INSERT INTO cotacao (id_proc, nm_forn, valor_cotacao) VALUES ('$idproc','$nmforn','$valor')";
$qry = mysqli_query($con,$insert);
if($qry){
    echo json_encode("Inserção realizada com sucesso!");
}else{
    echo json_encode("Falha na inserção.");
}
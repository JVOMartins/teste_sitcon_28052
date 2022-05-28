<?php require "../conecta.php";

$id_proc = $_POST['proc'];

$select = "SELECT nm_forn, valor_cotacao from cotacao where id_proc = $id_proc;";
$qry = mysqli_query($con,$select);


if($qry){
    while($resultado = mysqli_fetch_array($qry)){
        $nmforn = $resultado['nm_forn'];
        $valor = $resultado['valor_cotacao'];
        echo ("<tr><td>".$nmforn."</td><td>$valor</td></tr><br>");

    }
    
}else{
    echo json_encode("Falha ao obter dados.");
}
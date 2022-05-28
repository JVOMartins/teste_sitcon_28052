<?php require "../conecta.php";

$select = "SELECT id_proc, descricao from procedimentos;";
$qry = mysqli_query($con,$select);

if($qry){
    while($resultado = mysqli_fetch_array($qry)){
        $id = $resultado['id_proc'];
        $nmproc = $resultado['descricao'];
        echo ("<tr><td>".$id."</td><td>$nmproc</td></tr><br>");

        $array = array('id' => $id, 'proc' =>$nmproc);
        $dados = $array;
    }
    
}else{
    echo json_encode("Falha ao obter dados.");
}

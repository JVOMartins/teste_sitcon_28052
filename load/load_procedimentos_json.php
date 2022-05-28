<?php require "../conecta.php";

$select = "SELECT id_proc, descricao from procedimentos;";
$qry = mysqli_query($con,$select);

$dados = [];
echo ('<option value="">Selecione um procedimento</option>');
if($qry){
    while($resultado = mysqli_fetch_array($qry)){
        $id = $resultado['id_proc'];
        $nmproc = $resultado['descricao'];
        echo ("<option value=".$id.">$nmproc</option>");

        $array = array('id' => $id, 'proc' =>$nmproc);
        $dados = $array;
    }
    
}else{
    echo json_encode("Falha ao obter dados.");
}

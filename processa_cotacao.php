<?php require "contecta.php";
$id_proc = $_POST['proc'];

$select = "SELECT nm_forn, valor_cotacao from cotacao where id_proc = $id_proc;";
$qry = mysqli_query($con, $select);

$menorvalor = ''; $fornmaior = '';
$maiorvalor = ''; $fornmenor = '';
$media = ''; $totalqts=0; $totalvalor=''; $fornmedia = ''; $valorfmedia='';
$aux1='';$aux2='';

if ($qry) {
    while ($resultado = mysqli_fetch_array($qry)) {
        $nmforn = $resultado['nm_forn'];
        $valor = $resultado['valor_cotacao'];
        if(!isset($menorvalor)||empty($menorvalor)){
            $menorvalor = $valor;
        }
        if($valor > $maiorvalor){
            $maiorvalor = $valor;
            $fornmaior = $nmforn;
        }elseif($valor < $menorvalor){
            $menorvalor = $valor;
        }
        $totalvalor = $valor;
        $totalqts++;
    }
    $media = $totalvalor/$totalqts;

    echo "A média foi de R$ $media.";
    echo "O fornecedor $fornmaior teve o maior valor, que era de R$ $maiorvalor.";
    echo "O fornecedor $fornmenor teve o menor valor, que era de R$ $menorvalor.";

    while ($resultado = mysqli_fetch_array($qry)) {
        $nmforn = $resultado['nm_forn'];
        $valor = $resultado['valor_cotacao'];
        if(!isset($valorfmedia)||empty($valorfmedia)){
            $valorfmedia=$valor;
            $fornmedia = $nmforn;
        }else{
            if($media > $valorfmedia && $media > $valor){
                $aux1 = $media - $valorfmedia;
                $aux2 = $media - $valor;
                if($aux1>$aux2){
                    $valorfmedia = $valor;
                    $fornmedia = $nmforn;
                }
            }elseif($media < $valorfmedia && $media < $valor){
                $aux1 = $valorfmedia - $media;
                $aux2 =  $valor - $media;
                if($aux1>$aux2){
                    $valorfmedia = $valor;
                    $fornmedia = $nmforn;
                }
            }
        }
        
    }
    $insert = "INSERT INTO procedimentos (valor) VALUES ('$valorfmedia')";
    $qry = mysqli_query($con, $insert);
    echo "O fornecedor $formemdia teve o valor mais próximo da média, que era de R$ $valorfmedia.";
}

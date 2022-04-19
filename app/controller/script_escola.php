<?php
include_once 'connection.php';

$id_setor = $_REQUEST['setor'];
// $id_setor = 3;


$sqlSelect = $conn->prepare("SELECT * FROM escola WHERE idSetor='$id_setor'");
$sqlSelect->execute();
// $sqlSelect->setFetchMode(PDO::FETCH_ASSOC);

$json_data = array(); //cria o array
foreach(new RecursiveArrayIterator($sqlSelect->fetchAll()) as $x => $rec){

    $json_array['idEscola']      = $rec['idEscola'];
    $json_array['nomeEscola']    = $rec['nomeEscola'];


    //adiciona os valores ao array
    array_push($json_data, $json_array);

}

//converte os dados no formato JSON
echo json_encode($json_data);


?>





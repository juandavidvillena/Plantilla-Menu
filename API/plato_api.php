<?php

require_once '../libs/Database.php';
require_once '../libs/Sesion.php';
require_once "../libs/Plato.php";
require_once "../libs/TipoPlato.php";


function infoPlato($id){
    if(empty($id)){
        return [
            "cod" => 999,
            "mensaje" => "Falta identificador del plato.",
          ] ;
    }

    $db = pdoDatabase::getInstance("root", "", "plantillamenu");
    
    $query = "SELECT ingredientes FROM plato WHERE idPlato=$id ; ";
    $parametros = [$id];
    $db->queryPdo($query,$parametros);

    $ser = $db->getObject("Plato");

    return [
        "ingredientes"=> $ser->getIngredientes()
    ];
}
function tiposPlatos(){
  
    

    $db = pdoDatabase::getInstance("root", "", "plantillamenu");
    
    $query = "SELECT * FROM tipo_plato ; ";
    $parametros = [];
    $db->queryPdo($query,$parametros);

    $ser = $db->getObject('TipoPlato');

    return [
        "TipoPlatos"=> $ser->getNombreTipo()
    ];
}
function verPLatos(){
  
    

    $db = pdoDatabase::getInstance("root", "", "plantillamenu");
    
    $query = "SELECT * FROM plato ; ";
    $parametros = [];
    $db->queryPdo($query,$parametros);

    $ser = $db->getObject('Plato');

    return [
        "Nombre"=> $ser->getNombre()
    ];
}
$data = infoPlato(20);
//$data = tiposPlatos();
//$data = verPLatos();

header ("Content-Type: application/json");
echo json_encode($data);
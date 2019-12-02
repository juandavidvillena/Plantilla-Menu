<?php

    require_once 'libs/Sesion.php';
    require_once 'libs/Database.php';
    require_once 'libs/Plato.php';

    
    $db = pdoDatabase::getInstance('root', '','plantillamenu');

    $sql = "DELETE FROM plato WHERE idPlato=?";

    $id = $_GET['id'];
    $param = [$id];

    $db->queryPdo($sql,$param);

	if($db == true){
		header('Location: carta.php');
		$mensaje ='Se ha borrado correctamente el plato de nuestra carta';
	}
?>
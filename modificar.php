<?php
require_once 'libs/Database.php';
require_once 'libs/Sesion.php';
require_once 'libs/Plato.php';

$db = pdoDatabase::getInstance('root', '','plantillamenu');

$plato = new Plato();

$id = $_GET['id'];
$parametros= [$id];

if(!$db->queryPdo("SELECT * FROM plato WHERE idPlato=?",$parametros)){
    $mensaje = 'No se ha encontrado el plato';
}

if(!empty($_POST)){
    echo "hola hemos entrado";
    $nombre = $_POST['nombre'];
    $ingredientes = $_POST['ingredientes'];
    $alergenos = $_POST['alergenos'];
    $precio = $_POST['precio'];
    
    $query = "UPDATE plato SET nombre=?, ingredientes=?, alergeno=?, precio=? WHERE idPlato=?";
    $param = [$nombre,$ingredientes,$alergenos,$precio,$id];
    print_r($param);

    if(!$db->queryPdo($query,$param)){
        $mensaje = "Hay algo mal por ahi";
    }
}

?>


<?php
require_once 'libs/navbar.php';
?>
<?php while ($item = $db->getObject('Plato')):?>
    <div class="form-group">
<form method="post" action="carta.php" class="centrar">
  Nombre:<br>
  <textarea  class="form-control" type="text" name="nombre" rows="1" cols="50">
  <?=$item->getNombre()?>
  </textarea>
  <br>
  Ingredientes:<br>
  <textarea type="text" class="form-control"cols="100" name="ingredientes" >
  <?=$item->getIngredientes()?>
  </textarea><br>
  Alergenos:<br>
  <textarea type="text"class="form-control" cols="100" name="alergenos" >
    <?=$item->getAlergeno()?>
  </textarea><br>
  Precio:<br>
  <input type="text"class="clear-form form-control " name="precio" value=<?=$item->getPrecio()?>>
  <button type="submit" class="btn btn-success ">
</form>
    </div>
    <div class=""> </div>
    <?php endwhile; ?>


<?php require_once 'libs/footer.php';
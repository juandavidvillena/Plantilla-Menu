<?php
require_once 'libs/Database.php';
require_once 'libs/Sesion.php';
require_once 'libs/Plato.php';

$db = pdoDatabase::getInstance('root', '','plantillamenu');

$plato = new Plato();



if(!empty($_POST)){
    echo "hola hemos entrado";
    $nombre = $_POST['nombre'];
    $ingredientes = $_POST['ingredientes'];
    $alergenos = $_POST['alergenos'];
    $precio = $_POST['precio'];
    $foto = $_POST['foto'];
    
    $query = "INSERT INTO plato (nombre,ingredientes,alergeno,precio,foto) VALUES (?,?,?,?,?)";
    $param = [$nombre,$ingredientes,$alergenos,$precio,$foto];
    print_r($param);
    if(!$db->queryPdo($query,$param)){
        $mensaje = "Hay algo mal por ahi";
    }
}

?>


<?php
require_once 'libs/navbar.php';
?>    <div class="form-group">
<form method="post" class="centrar">
  Nombre<br>
  <textarea  class="form-control" type="text" name="nombre" rows="1" cols="50">
  </textarea>
  <br>
  Ingredientes<br>
  <textarea type="text" class="form-control"cols="100" name="ingredientes" >
  </textarea><br>
  Alergenos<br>
  <textarea type="text"class="form-control" cols="100" name="alergenos" >
  </textarea><br>
  Precio<br>
  <input type="text"class="clear-form form-control " name="precio" ><br>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Foto</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo</label>
  </div>
</div>
  <button type="submit" class="btn btn-success ">
    
</form>
    </div>
    <div class=""> </div>

<?php require_once 'libs/footer.php';
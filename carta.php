<?php 
    require_once 'libs/navbar.php'; 
    require_once 'libs/Database.php';
    require_once 'libs/Plato.php';

    $db = pdoDatabase::getInstance('root','', 'plantillamenu');


    $plato = new Plato();
    //$consulta = $conectar->prepare("SELECT * FROM plato");
    //$consulta->execute();
    $parametros = [];
    

    if(!$db->queryPdo("SELECT * FROM plato",$parametros)){
        $mensaje = 'No hay platos que mostrar';
    }
?>

<div class="content table-responsive table-full-width">
<table class="table table-hover table-striped">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Alergenos</th>
        <th>Ingredientes</th>
        <th><i class="fa fa-wrench" aria-hidden="true"></i>Opciones</th>
    </thead>
    <tbody>
    <?php while ($item = $db->getObject('Plato')):?>
           <tr>
               <td><?=$item->getIdPlato()?></td>
               <td><?=$item->getNombre()?></td>
               <td><?=$item->getPrecio()." €"?></td>
               <td><?=$item->getAlergeno()?></td>
               <td><?=$item->getIngredientes()?></td>
                <?php echo "<td><a href='modificar.php?id=".$item->getIdPlato()."' class='btn btn-warning btn-m'><i class='fa fa-pencil' aria-hidden='true'><img src='images/pencil.svg'></i></a>"; ?>
            <?php echo "<a href='borrar.php?id=".$item->getIdPlato()."' class='btn btn-danger btn-m'><i class='fa fa-trash' aria-hidden='true'><img src='images/delete.svg'></i></a>". "</td>"; ?>
            
        </tr>
        <?php endwhile; ?>    
    </tbody>
</table>
<?php  if(!empty($mensaje)): ?>
    <div class="alert alert-danger">
        <p><b> Error - </b> <?php echo $mensaje; ?></p>
    </div>
<?php  endif; ?>
</div>




<? require_once '/libs/footer.php'; ?>
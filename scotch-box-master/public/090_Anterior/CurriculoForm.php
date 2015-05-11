<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <h1>Sr/Sra.  <?php echo $_POST['nombre']?>  <?php echo $_POST['apellidos']?> su curriculum ha sido recibido</h1>

</head>
<body>
<p>NOMBRE: <?php echo $_POST['nombre']?><br/>
    APELLIDOS:  <?php echo $_POST['apellidos']?><br/>
    CONTRASEÑA: <?php echo $_POST['contrasenia']?><br/>
    SEXO: <?php echo $_POST['sexo']?><br/>
    FOTO:<img src="<?php echo $_GET['incluirFoto'] ?>" style="width:400px" alt="foto del curriculum"/>
</p>
<p>
<?php
    if(isset($_POST['suscribir']) && ($_POST['suscribir']== 'checked'))
    {
        echo'Te has suscrito.';
}
else{
    echo 'No te has suscrito.';
}
?>
</p>

</body>

</html>
<?php 

$conexion = new mysqli("127.0.0.1","root","1234","pruebita");
$sql = "SELECT * FROM personita";
$resultado = $conexion -> query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Personitas</h1>

    <?php foreach($resultado -> fetch_all(MYSQLI_ASSOC) as $fila) :?>
            
        <b>ID:</b> <?=$fila['id']?>  
        <b>Nombre:</b>  <?=$fila['nombre']?> 
        <b>Apellido:</b> <?=$fila['apellido']?> 
        <b>Telefono:</b> <?=$fila['telefono']?> 
        <b>Email:</b>  <?=$fila['email']?> 
        
        <a href="/eliminar.php?id=<?=$fila['id']?>">Eliminar</a>
        <a href="/formularioModificar.php?id=<?=$fila['id']?>">Modificar</a>

        <br />

    <?php endforeach; ?>

    
    <br /> <br />
    <form action="/insertar.php" method="post">
        ID: <input type="text" name="id" > <br />
        Nombre: <input type="text" name="nombre" > <br />
        Apellido: <input type="text" name="apellido" > <br />
        Telefono: <input type="number" name="telefono" > <br />
        Email: <input type="email" name="email" > <br />

        <input type="submit" value="Enviar">
    </form>

    <?php if(isset($_GET['exito']) && $_GET['exito'] === "true" ) :?>
        <div style="color: green;">Se ingreso la personita correctamente</div>
    <?php endif;?>

    <?php if(isset($_GET['exito']) && $_GET['exito'] === "false" ) :?>
        <div style="color: red;">Hubo un errorcito.</div>
    <?php endif;?>

    <?php if(isset($_GET['eliminado']) && $_GET['eliminado'] === "true" ) :?>
        <div style="color: green;">Se eliminó la personita correctamente</div>
    <?php endif;?>

    <?php if(isset($_GET['eliminado']) && $_GET['eliminado'] === "false" ) :?>
        <div style="color: red;">Hubo un errorcito al eliminar</div>
    <?php endif;?>

    <?php if(isset($_GET['modificado']) && $_GET['modificado'] === "true" ) :?>
        <div style="color: green;">Se modificó la personita correctamente</div>
    <?php endif;?>

    <?php if(isset($_GET['modificado']) && $_GET['modificado'] === "false" ) :?>
        <div style="color: red;">Hubo un errorcito al modificar</div>
    <?php endif;?>
</body>
</html>
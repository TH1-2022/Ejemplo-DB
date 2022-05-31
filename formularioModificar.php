<?php 


    $conexion = new mysqli("127.0.0.1","root","1234","pruebita");
    $sql = "SELECT * FROM personita WHERE id =" . $_GET['id'];
    $resultado = $conexion -> query($sql)  -> fetch_all(MYSQLI_ASSOC)[0];

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
    
<h1>Modificar personita</h1>

<form action="/modificar.php" method="post">
        ID: <input type="text" name="id" value="<?= $resultado['id'] ?>" readonly> <br />
        Nombre: <input type="text" name="nombre" value="<?= $resultado['nombre'] ?>" > <br />
        Apellido: <input type="text" name="apellido" value="<?= $resultado['apellido'] ?>" > <br />
        Telefono: <input type="number" name="telefono" value="<?= $resultado['telefono'] ?>" > <br />
        Email: <input type="email" name="email" value="<?= $resultado['email'] ?>" > <br />

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
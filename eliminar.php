<?php 

    $conexion = new mysqli("127.0.0.1","root","1234","pruebita");
    $sql = "DELETE FROM personita WHERE id = " . $_GET['id'];
    if($conexion -> query($sql) === TRUE )
        header("Location: /index.php?eliminado=true");
    else 
        header("Location: /index.php?eliminado=false");


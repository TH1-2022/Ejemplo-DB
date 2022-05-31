<?php 

    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        header('Location: 404.php');
        echo "404 Not found";    
    }
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];


    $conexion = new mysqli("127.0.0.1","root","1234","pruebita");

    if($id === "")
        $sql = "INSERT INTO personita (nombre,apellido,telefono,email)
        VALUES ('$nombre','$apellido',$telefono,'$email')";
    else 
        $sql = "INSERT INTO personita VALUES($id,'$nombre','$apellido',$telefono,'$email')";

    if($conexion -> query($sql) === TRUE )
        header("Location: /index.php?exito=true");
    else 
        header("Location: /index.php?exito=false");


    


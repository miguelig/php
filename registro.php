<?php
    include "conexion.php";
    include "index.php";
    //obtener las variables de entrada del usuario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $insert_query = "INSERT INTO registro VALUES (null,'".$nombre."','".$email."','".$us."','".$pass."')";
    
    if(mysqli_query($con,$insert_query)){
        echo"Succes";
    }else{
        echo"Error";
    }
?>
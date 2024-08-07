<?php
    $host="localhost";
    $dbName = "tarea";
    $dbUser = "root";
    $dbPass ="";

    $con = new mysqli($host,$dbUser,$dbPass,$dbName);

    if(!$con){
        die("No hubo conexion ferxxo".mysqli_connect_error());
    }
      //else{
        //  echo("Conexion mela parcero socio");   
    //}
?>
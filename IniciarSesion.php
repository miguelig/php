<?php

    session_start();
    
    include "conexion.php";
    
    if(isset($_POST["user"])&& isset($_POST["pass"])){
        function validate($data){ 
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['user']);
        $Password = validate($_POST['pass']);

        if(empty(($Usuario))){
            header('Location: index.php?error = El Usuario es Requerido');
            exit();
        }elseif(empty(($Password))){
            header('Location: index.php?error = El Password es Requerido');
            exit();
        }else { 
            $Password = md5($Password);

            $Sql = "SELECT * FROM user where user = '$Usuario' AND pass = '$Password'";
            $result = mysqli_query($con,$Sql);
            if(mysqli_num_rows($result) === 1){
                $row =mysqli_fetch_assoc($result);
                if($row ['user'] === $Usuario && $row['pass'] === $Password){
                    $_SESSION['user'] = $row['user'];
                    //$_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header('Location: Inicio.php');
                    exit();
                }else{
                    header('Location: index.php?error = El Usuario y el password son incorrectas');
                    exit();
                }
            }
        }
    }else{
        header('Location: index.php');
        exit();
    }
?>
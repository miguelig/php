<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXU1oBoqy12QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="StylesLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha512-xh60/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
    <form action="IniciarSesion.php" method="POST">
        <h1>Login</h1>
        <hr>
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>
            </p>
        <?php
                }
        ?>


        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="user" placeholder="Name user">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="pass" placeholder="Password">
        </hr>
        <button type="submit">Iniciar sesioin</button>
        <a href="CrearCuenta.php">Create acount</a>
    </form>
</body>

</html>
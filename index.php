<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon_package_v0.16/favicon-16x16.png">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login-Notics</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <div class="container">
        <div class="logo">

            <img class="img1" src="./img/logoNegro.png" alt="logo">
            <img class="img2" src="./img/logoRespNegro.png" alt="logo2">
        </div>
        <div class="top"></div>
        <div class="bottom">

        </div>
        <div class="box">

            <div class="center">
                <h2>Inicio de sesion</h2>
                <form action="./proc/validacion.php" method="post">
                    <!-- <div> -->
                        <label for="email">Email</label><br>
                        <input class="form email" type="email" name="user">
                        <br>
                    <!-- </div>
                    <div> -->
                        <label for="password">Contraseña</label><br>
                        <input class="form password" type="password" name="password">
                        <br>
                    <!-- </div> -->
                    <button class="btn" id="submit" type="submit">Log In</button>


                </form>
<?php

            if (isset($_GET['validation']) && $_GET['validation']=="false") {
                echo "<p class='error'>Error en el inicio de sesión</p>";
            }
            ?>
            </div>
            
        </div>




    </div>
    <script src="./js/validation.js"></script>


</body>

</html>
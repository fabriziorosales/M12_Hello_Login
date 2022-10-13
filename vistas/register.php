<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icoo de ventana -->
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_package_v0.16/favicon-16x16.png">

    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Welcome-Notics</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <nav>
        <div class="logo">
            <img class="img1" src="../img/logoRespNegro.png" alt="">
        </div>

        <div class="logOut">
            <img class="icon-logOut" src="../img/bx-log-out-circle.svg" alt="">
        </div>
    </nav>



    <div class="padre">
        <div class="box">
            <div class="titulo_box">
                <p>Por favor, rellena el formulario</p>
                <hr>
            </div>

            <form action="../proc/crearcontroller.php" method="post">

                <label for="email">Email</label><br>
                <input class="form email" type="email" name="username" required>

                <br>
                <label for="email">Contraseña</label><br>
                <input class="form password" type="password" name="password" required>

                <br><label for="password">Confirma la contraseña</label><br>
                <input class="form password_con" type="password" name="password_conf" required>

                <input id="submit" type="submit" value="Registrarse">

            </form>

        </div>

    </div>
    <!-- <script src="../js/validation.js"></script> -->
</body>

</html>
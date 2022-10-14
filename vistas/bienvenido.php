<?php 

session_start();
        if (empty($_SESSION)) {
            echo "<script>window.location.href='../index.php'</script>";
        }else {
        ?>
        <!DOCTYPE html>
            <html lang='en'>
            
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <!-- icoo de ventana -->
                <link rel='icon' type='image/png' sizes='32x32' href='../img/favicon_package_v0.16/favicon-32x32.png'>
                <link rel='icon' type='image/png' sizes='16x16' href='../img/favicon_package_v0.16/favicon-16x16.png'>
            
                <!-- boxicons link -->
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            
                <title>Welcome-Notics</title>
                <link rel='stylesheet' href='../css/bienvenido.css'>

                <!-- JS -->
                <script src="../js/sweetAlert2.js"></script>
                <script src="../js/logOut.js"></script>
            </head>
            
            <body>
                <nav>
                    <div class='logo'>
                        <img class='img1' src='../img/logoRespNegro.png' alt=''>
                    </div>
            
                    <div class='logOut'>    
                        <img class='icon-logOut' onclick="alertaLogOut()" src='../img/bx-log-out-circle.svg' alt=''>
                    </div>
                </nav>
            
                <div class='content'>
            
                    <div class='mensaje'>
                         <div class='bienvenido'>
                        <h1>Bienvenido a </h1>
            
                        <img src='../img/logoNegro.png' alt=''>
                    </div> </div>
                   
                <div class='btn_NuevoRegis'>
               <?php
                    if ($_SESSION['adm']==1) {
                        echo "<span class='btn'><a class='' href='./register.php'>Crear Nuevo Usuario</a></span>";
                    }
                 ?>
                    </div>
                </div>
               
                
            </body>
            
            </html>
            <?php 
        }
        ?>
        


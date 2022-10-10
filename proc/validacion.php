<?php
if (!empty($_POST['user']) && !empty($_POST['password'])) {
    function login($email_login, $password_login) {
        require "./conexion.php";
        if (!$conexion) {
            echo "ERROR DE CONEXION CON LA BASE DE DATOS";
            echo "<a href='../view/login.php'>volver</a>";
            die;
        }
        $user = $_POST['user'];
        $res = explode("@", $user);
        $querya = "SHOW GRANTS FOR $res[0]";
        $result = mysqli_query($conexion,$querya);
        if ($result == true){
            $query2 = "SELECT * FROM tbl_gestornotas WHERE user = '{$email_login}' AND password = '{$password_login}'";
            $valid_login1 = mysqli_query($conexion, $query2);
            print_r($valid_login1);
            echo "está entrando?";
            $match1 = $valid_login1 -> num_rows;
            print_r($match1);
            if ($match1 === 1) {
                foreach ($valid_login1 as $key => $user) {
                    $_SESSION['id_usuario'] = $user['id'];
                    $_SESSION['email_usuario'] = $user['user'];
                    $_SESSION['contra_usuario'] = $user['password'];
                }
              echo "<script>location.href = '../vistas/bienvenido.html';</script>";
            }
        }
        $query = "SELECT * FROM tbl_gestornotas WHERE user = '{$email_login}' AND password = '{$password_login}'";
        $valid_login = mysqli_query($conexion, $query);

        $match = $valid_login -> num_rows;
        if ($match === 1) {
            session_start();

            foreach ($valid_login as $key => $user) {
                $_SESSION['id_usuario'] = $user['id'];
                $_SESSION['email_usuario'] = $user['user'];
                $_SESSION['contra_usuario'] = $user['password'];
            }
            echo "<script>location.href = '../vistas/bienvenido.html';</script>";
        } else {
           echo "<script>location.href = '../index.html?validation=false';</script>";
        }
    }

    $email = $_POST['user'];
    $password = $_POST['password'];

    login($email,$password);

} else {

   echo "<script>location.href = '../index.html?validation=false';</script>";

}
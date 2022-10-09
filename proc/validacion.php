<?php
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    function login($email_login, $password_login) {
        require "./conexion.php";

        if (!$conn) {
            echo "ERROR DE CONEXION CON LA BASE DE DATOS";
            echo "<a href='../view/login.php'>volver</a>";
            die;
        }
        $user = $_POST['user'];
        $res = explode("@", $user);
        $query = "SHOW GRANTS FOR $res[0]";
        $result = mysqli_query($conn,$query);
        print_r($result);
        if ($result == true){
            $query = "SELECT * FROM tbl_gestornotas WHERE user = '{$email_login}' AND password = '{$password_login}'";
            $valid_login = mysqli_query($conn, $query);
            echo "está entrando?";
            $match = $valid_login -> num_rows;
            if ($match === 1) {
                session_start();
    echo "aqui tbm chega?";
                foreach ($valid_login as $key => $user) {
                    $_SESSION['id_usuario'] = $user['id'];
                    $_SESSION['email_usuario'] = $user['user'];
                    $_SESSION['contra_usuario'] = $user['pass'];
                }
              //  echo "<script>location.href = '../vistas/bienvenido.html';</script>";
            } else {
            }
        }
        $query = "SELECT * FROM tbl_gestornotas WHERE user = '{$email_login}' AND password = '{$password_login}'";
        $valid_login = mysqli_query($conn, $query);

        $match = $valid_login -> num_rows;
        if ($match === 1) {
            session_start();

            foreach ($valid_login as $key => $user) {
                $_SESSION['id_usuario'] = $user['id'];
                $_SESSION['email_usuario'] = $user['user'];
                $_SESSION['contra_usuario'] = $user['pass'];
            }
       //     echo "<script>location.href = '../vistas/bienvenido.html';</script>";
        } else {
       //     echo "<script>location.href = '../index.html?validation=false';</script>";
        }
    }

    $email = $_POST['user'];
    $password = $_POST['pass'];

    login($email,$password);

} else {
 //  echo "<script>location.href = '../index.html?validation=false';</script>";
}
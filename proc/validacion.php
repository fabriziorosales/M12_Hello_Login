<?php
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    function login($email_login, $password_login) {
        require "./conexion.php";

        if (!$conn) {
            echo "ERROR DE CONEXION CON LA BASE DE DATOS";
            echo "<a href='../view/login.php'>volver</a>";
            die;
        }

        $query = "SELECT * FROM tbl_gestornotas WHERE user = '{$email_login}' AND password = '{$password_login}'";
print_r($query);
        $valid_login = mysqli_query($conn, $query);

        $match = $valid_login -> num_rows;

        if ($match === 1) {
            session_start();

            foreach ($valid_login as $key => $user) {
                $_SESSION['id_usuario'] = $user['id'];
                $_SESSION['email_usuario'] = $user['user'];
                $_SESSION['contra_usuario'] = $user['pass'];
            }
            echo 'sexo sem parar';

            echo "<script>window.location.href = '../paginachula.html';</script>";
        } else {
            echo "<script>window.location.href = '../index.html?validation=false';</script>";
        }
    }

    $email = $_POST['user'];
    $password = $_POST['pass'];

    login($email,$password);

} else {
   echo "<script>window.location.href = '../index.html?validation=false';</script>";
}
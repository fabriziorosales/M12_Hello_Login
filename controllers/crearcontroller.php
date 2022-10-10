<?php

// if ((!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['password_conf'])) && ($_POST['password'] == $_POST['password_conf'])) {
// //QUE ES PASSWORD_CONF??

    $username = "'or 1=1;";
    // $password = $_POST['password'];

        
 
    //require "../controllers/conexion.php";
    $conexion = mysqli_connect('localhost', 'root','','bd_notas');
    $username = $conexion -> real_escape_string($username);
    echo $username;
    // $username = mysqli_real_escape_string($username);
        $password = sha1($_POST['password']);

// $conexion -> real_scape_string($_POST)

    // if (!$conexion) {
    //     echo "ERROR DE CONEXION CON LA BASE DE DATOS";
    //     echo "<a href='../vistas/register.php'>volver</a>";
    //     die;
    // }

//     $validation_query = "SELECT id FROM tbl_gestornotas WHERE user = '$user'";

//     $valid_login = mysqli_query($conexion, $validation_query);

//     $match = $valid_login -> num_rows;

//     if ($match === 1) {

//         echo "<script>window.location.href = '../view/register.php?validation=false';</script>";

//     } elseif ($match === 0) {

//         $insert_query = "INSERT INTO tbl_usuario (id, user, nombre_usuario) VALUES (NULL, '{$user}', '{$password}')";
//         $insert_sql = mysqli_query($conexion, $insert_query);

//         if ($insert_sql) {
//             require "./validacion.php";
//             login($user, $password);
//         } else {
//             echo "NO SE HA PODIDO CREAR USUARIO";
//         }

//     } else {
//         echo "<script>window.location.href = '../view/register.php?validation=false';</script>";
//     }

// } else {
//     echo "<script>window.location.href = '../view/register.php?validation=false';</script>";
 //}
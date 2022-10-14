<?php

if ((!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_conf'])) && ($_POST['password'] == $_POST['password_conf'])) {
//QUE ES PASSWORD_CONF??

    $username = $_POST['username'];
    $password = $_POST['password'];

        
 
    require "../proc/conexion.php";
     
        $username = $conexion -> real_escape_string($username);
        $password = sha1($_POST['password']);

        

    if (!$conexion) {
        echo "ERROR DE CONEXION CON LA BASE DE DATOS";
        echo "<a href='../vistas/register.php'>volver</a>";
        die;
    }

    $validation_query = "SELECT id FROM tbl_gestornotas WHERE user = '$username'";

    $valid_login = mysqli_query($conexion, $validation_query);

    $match = $valid_login -> num_rows;

    if ($match === 1) {
      
        echo "<script>alert('Este usuario ya existe')</script>";
        

        echo "<script>window.location.href = '../vistas/register.php';</script>";

    } elseif ($match === 0) {

        try {
        $insert_query = "INSERT INTO tbl_gestornotas (id, user, password) VALUES (NULL, '{$username}', '{$password}')";
        $insert_sql = mysqli_query($conexion, $insert_query);
        echo "<script>alert('Usuario registrado correctamente')</script>";
        

        echo "<script>window.location.href = '../vistas/register.php';</script>";
        } catch ( exception $e) {
            echo $e -> getmessage();
            echo "<script>alert('Erro al registrar al usuario')</script>";
        

        echo "<script>window.location.href = '../vistas/register.php';</script>";
        }

     

        

    }
    else {
        echo "<script>window.location.href = '../vistas/register.php?validation=false';</script>";
    }

}
 else {
    echo "<script>alert('Campos no rellenados o incorrectos')</script>";
        

    echo "<script>window.location.href = '../vistas/register.php';</script>";
    
    // echo "<script>window.location.href = '../vista/register.php?validation=false';</script>";
 }
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

        echo "Este user existe";

        // echo "<script>window.location.href = '../vistas/register.php?validation=false';</script>";

    } elseif ($match === 0) {

        try {
        $insert_query = "INSERT INTO tbl_gestornotas (id, user, password) VALUES (NULL, '{$username}', '{$password}')";
        $insert_sql = mysqli_query($conexion, $insert_query);
        echo "usuario creado correctamente";
        } catch ( exception $e) {
            echo $e -> getmessage();
            echo "error al crear usuario";
        }

     

        

    }
    else {
        echo "<script>window.location.href = '../vistas/register.php?validation=false';</script>";
    }

}
 else {
    echo "campos no rellenados"; 
    
    // echo "<script>window.location.href = '../vista/register.php?validation=false';</script>";
 }
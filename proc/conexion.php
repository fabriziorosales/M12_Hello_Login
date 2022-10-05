<?php
$conn = mysqli_connect("172.24.16.18","admin","DaW2@","bd_notas");


if(!$conn){
    echo "Error: No se pudo conectar a MySQL";
    exit;
}else{
    echo "Todo bien";
}


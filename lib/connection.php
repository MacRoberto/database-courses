<?php

    $db = "escuela";
    $host = "localhost";
    $userDB = "root";
    $passDB = "";

    $conexion = new mysqli($host, $userDB, $passDB, $db) or die ("No se puede conectar a la base de datos")

?>
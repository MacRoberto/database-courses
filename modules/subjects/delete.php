<?php
require_once './../../lib/connection.php';
$IDcourses = $_GET['IDcourses'];
$query = "DELETE FROM courses WHERE IDcourses = $IDcourses";
$conexion ->query($query);
header("Location: ./");

?>
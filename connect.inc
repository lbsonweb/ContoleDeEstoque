<?php
$database="estoque";
$servidor="localhost";
$username="root";
$password="";
$con= mysqli_connect("$servidor","$username","$password") or die ("Erro ao conectar". mysqli_connect_error($con));
$sel=mysqli_select_db($con,$database) or die (mysqli_error($con));
?>

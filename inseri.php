<?php
require 'conecta.inc';
if(isset($_POST['produto'])){
	$produto=$_POST['produto'];
}
if($produto == ""){
	echo "Formulario não prenchido";
}else{
	$ins="INSERT INTO itens(`produto` ) VALUES ('$produto')";
	$res=mysqli_query($con,$ins);
}
?>

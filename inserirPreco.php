<?php
require 'conecta.inc';
$preco=$_POST['preco'];
$produto=$_POST['npreco'];
if($produto== ""){
	echo "Produto não prenchido";
}else if($preco==""){
	echo"Preco nao prenchido";
}else{

	$sql="UPDATE itens SET preco='$preco' WHERE produto='$produto'";
	$res=mysqli_query($con,$sql);


	if($res){
		echo"ok";
	}else{
		echo"erro";
	}
}
?>

<?php
require 'conecta.inc';
$quant=$_POST['quant'];
$prodt=$_POST['prodt'];
if($prodt==""){
	echo"Produto nao inserido";
}else if($quant==""){
	echo"Preco nao inserido";
}else{

$sql="SELECT * FROM itens WHERE produto LIKE'%$prodt%'";
$res=mysqli_query($con, $sql);

While($reg=mysqli_fetch_row($res)){
	$vproduto=$reg[1];
	$vpreco=$reg[2];
	$vquant=$reg[3];
	
	
$quant+=$vquant;
}

$sql="UPDATE itens SET quant='$quant'WHERE produto='$prodt'";
$res=mysqli_query($con,$sql);
Mysqli_close($con);
}
?>

<?php
require 'conecta.inc';
$pesquisa=$_POST['pesquisa'];

$sql="SELECT * FROM itens WHERE produto LIKE'%$pesquisa%'";
$res=mysqli_query($con, $sql);

While($reg=mysqli_fetch_row($res)){
	$vproduto=$reg[1];
	$vpreco=$reg[2];
	$vquant=$reg[3];
	echo "<table border= 1 >
			<tr>
				<td>$vproduto</td><td> $vpreco</td><td> $vquant</td>
		  </tr
	</table>";
}
?>

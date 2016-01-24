<html>
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Estoque</title>
	</head>
	<body>
	<h1>Controle de estoque</h1>
	<h2>Pesquisar produto</h2>
		<form action="pesquisa.php" method="post">
			<input type="text" name="pesquisa" placeholder="Pesquise aqui">
			<input type="submit" name="pesquisar" value="Pesquisar">
		</form>
	<h2>Inserir produto</h2>	
		<form name="produtos" action="inseri.php" method="post">
			<input type="text" name="produto" placeholder="Nome do produto">
			<input type="submit" name="inseriprod" value="Inserir">
		</form>
		<h2>Inserir preco</h2>
		<form name="formpreco" action="inserirpreco.php" method="post">	
			<input type="text" name="npreco" placeholder="Nome do produto">
			<input type="text" name="preco" placeholder="Preço do produto">
			<input type="submit" name="enseripreco" value="Inserir">
		</form>
		<h2>Inserir quantidade de entrada</h2>
		<form name="quant" action="inseriquant.php" method="post">
			<input type="text" name="prodt" placeholder="Nome do produto">
			<input type="number" name="quant" min="1" placeholder="Entrada de produto">
			<input type="submit" name="inserir" value="Inserir">
		</form>	
		<h2>Inserir quantidade de saida</h2>
		<form name="quant" action="inseriquant.php" method="post">
			<input type="text" name="prodt" placeholder="Nome do produto">
			<input type="number" name="quant" max="-1" placeholder="Saida de produto">
			<input type="submit" name="inserir" value="Inserir">
		</form>	
		
	
	</body>
</html>

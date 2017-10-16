<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Project01</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Pessoa.php';

		$p = new Pessoa('Hezrom', 26, 'M');
		print_r($p);

		$p->setNome('Morzeh');
		$p->setIdade(15);
		$p->setSexo('F');
		$p->fazAniver();

		echo "<br>Nome: ".$p->getNome();
		echo "<br>Idade: ".$p->getIdade()." anos";
		echo "<br>Sexo: ".$p->getSexo();

	?>
	</pre>
</body>
</html>
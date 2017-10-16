<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Project02</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Pessoa.php';
		require_once 'Medico.php';

		$p = new Pessoa('Hezrom', 26, 'M');
		print_r($p);

		echo "<br>";

		$t = new Medico($p);
		$t->trocaSexo();
	?>
	</pre>
</body>
</html>
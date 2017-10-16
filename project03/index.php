<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Project03</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Aluno.php';
		require_once 'Professor.php';

		$a = new Aluno('Hezrom', 26, 'M');
		$a->fazAniver();
		echo $a->getNome().'<br>';
		$a->msg();

		echo '<br>';
		
		print_r($a);

		$p = new Professor('Helen', 28, 'F');
		
		echo '<br>';
		
		$p->setMateria('História');
		echo $p->getNome().'<br>';
		$p->msg();
		echo 'Dou aula de '.$p->getMateria().'.<br><br>';
		print_r($p);
		
	?>
	</pre>
</body>
</html>
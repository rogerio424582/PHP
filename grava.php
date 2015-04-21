<?php
	$_SESSION['cad']=1;
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	
	$user = 'root';
	$senha = '424582';
	$server = 'localhost';
	$banco = 'formulario_aula';
	
	mysql_connect($server, $user, $senha) or die("deu pau!");
	mysql_select_db($banco);
	
	$sql = "INSERT INTO formulario(nome, endereco, numero, bairro) VALUES ('$nome', '$endereco', '$numero', '$bairro')";
	
	mysql_query($sql) or die(mysql_error());
	mysql_close();
	
	print ('Foi gravado no banco de dados: <br>nome= '.$nome.', endereço= '.$endereco.', número= '.$numero.', bairro= '.$bairro.'<br>');
?>

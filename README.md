# PHP
Trabalho disciplinar

envia.html

<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<meta charset="utf-8">
		<h1> CADASTRO </h1>
	</head>
	<body>
		<form name="Cliente" method="post" onSubmit="return valida(this)" action="http://localhost/Projetos/grava.php">
			<table width="43%" border="0" cellspacing="2" cellpadding="0">
				<tr>
					<td width="9%">Nome</td>
					<td width="91%"><input type="text" name="nome" size="50" required></td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><input type="text" name="endereco" size="50" required></td>
				</tr>
				<tr>
					<td>Número</td>
					<td><input type="text" name="numero" size="50" required></td>
				</tr>
				<tr>
					<td>Bairro</td>
					<td><input type="text" name="bairro" size="50" required></td>
				</tr>
				<tr>
					<td><input type="reset" value="Limpar"></td>
					<td><input type="submit" value="Gravar"></td>
				</tr>
			</table>
		</form>
	</body>
	<script languange="javascript">
		function valida(){			
			if(Cliente.numero.value.length<3){
				alert("Número deve possuir 3 digitos");
				return false;
			}
			return;
		}
	</script>
</html>

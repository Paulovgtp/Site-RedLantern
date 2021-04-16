<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrando...</title>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "123";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$estado=$_POST['estado'];
$logim=$_POST['logim'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT into usuarios(nome, email, estado, logim, senha)
values('$nome','$email','$estado','$logim','$senha')");
echo "Cadastro efetuado com sucesso";
?>
<script>
    window.location.href='cadastrado.html';
</script>
</body>
</html>

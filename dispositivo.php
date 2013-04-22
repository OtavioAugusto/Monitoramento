<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<?php
session_start();

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$objeto= $_POST ["objeto"];
$serie= $_POST ["serie"];



$conexao = mysql_connect("localhost","root","admin"); //localhost é onde esta o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
 
//conectando com a tabela do banco de dados
$banco = mysql_select_db("rastreador",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
$query = "INSERT INTO `dispositivo` ( `NomeObjeto` , `NumSerie`, `login` )
VALUES ('$objeto', '$serie','$_SESSION[usuario]' )";
mysql_query($query,$conexao);
echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
?>
</body>
</html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$nome= $_POST ["nome"];//atribui��o do campo "nome" vindo do formul�rio para variavel
$email= $_POST ["email"];//atribui��o do campo "email" vindo do formul�rio para variavel
$ddd= $_POST ["ddd"];//atribui��o do campo "ddd" vindo do formul�rio para variavel
$tel= $_POST ["telefone"];//atribui��o do campo "telefone" vindo do formul�rio para variavel
$login= $_POST ["login"];//atribui��o do campo "login" vindo do formul�rio para variavel
$senha= $_POST ["senha"];//atribui��o do campo "senha" vindo do formul�rio para variavel
 
//Gravando no banco de dados ! conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root","admin"); //localhost � onde esta o banco de dados.
if (!$conexao)
die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
 
//conectando com a tabela do banco de dados
$banco = mysql_select_db("rastreador",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
//Query que realiza a inser��o dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `clientes` ( `nome` , `email` , `ddd` , `telefone` , `login` , `senha` , `id` )
VALUES ('$nome', '$email', '$ddd', '$tel',  '$login', '$senha', '')";
mysql_query($query,$conexao);
########## � Explica��o da query � ##########
#$query = nome da variavel que decidi#
#utilizar para realizar a opera��o.#
#############################################
#clientes = nome da tabela que ser� salvo#
#os dados do cadastro do cliente#
#############################################
#nome, email, sexo, ddd, telefone,#
#endere�o, cidade, estado, bairro, pa�s,#
#login, senha, news, id.#
##
#S�o apenas os nomes dos campos que #
#constam na tabela clientes.#
#############################
#VALUES = indica que ser�o inseridos os#
#seguintes valores.#
#############################################
#$nome, $email, $sexo, $ddd, $telefone,#
#$endere�o, $cidade, $estado, $bairro, #
#$pa�s, $login, $senha, $news, $id.#
#############################
#S�o apenas as variaveis a qual eu#
#atribui os valores digitados no formul�-#
#rio.#
#############################################
echo "Seu cadastro foi realizado com sucesso!Agradecemos a aten��o.";
//mensagem que � escrita quando os dados s�o inseridos normalmente.
?>
</body>
</html>
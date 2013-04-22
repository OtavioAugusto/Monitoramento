<?php
ob_start();
//CONECTA COM O BANCO DE DADOS 
$conexao = mysql_connect("localhost","root","admin");
$banco = mysql_select_db("rastreador",$conexao);
//RECEBE OS DADOS DO FORMULÁRIO 
$usuario = $_POST[txtUser]; 
$senha = $_POST[txtSenha];
//VERIFICA 
$sql = mysql_query(" 
SELECT * FROM clientes WHERE login = '$usuario' AND senha = '$senha'") or die("ERRO NO COMANDO SQL");
//LINHAS AFETADAS PELA CONSULTA 
$row = mysql_num_rows($sql);
//VERIFICA SE RETORNOU ALGO 
if($row == 0) echo "Usuário/Senha inválidos";
else {
//PEGA OS DADOS 
$id = mysql_result($sql, 0, "id"); 
$usuario = mysql_result($sql, 0, "login");
$nome = mysql_result($sql, 0, "nome");

//INICIALIZA A SESSÃO 
session_start();
//GRAVA AS VARIÁVEIS NA SESSÃO 
$_SESSION[id] = $id;
$_SESSION[usuario] = $usuario;
$_SESSION[nome] = $nome;

//REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS 
Header("Location: dispositivo.html"); 
}; //FECHA ELSE 
?>
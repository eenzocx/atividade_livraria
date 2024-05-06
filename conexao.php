<?php 
//Dados para conexão do banco
$servidor = "localhost";
$user = "root";
$password = "root";
$banco = "bd_sistemas";

//conectando no banco de dados utilizando a função mysqli
$conexao = new mysqli($servidor, $user, $password, $banco);


?>
<?php
//Recebendo dados do formulário

$nome = $_POST ['nome'];
$setor = $_POST ['setor'];
$login = $_POST ['login'];
$senha = $_POST ['senha'];

//Inserindo dados no banco

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL, '$nome', '$setor', '$login', '$senha' )";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

echo"inserido com Sucesso";



?>
<?php
//Recebendo dados do formulário
$nome = $_POST['login'];
$senha = $_POST['senha'];

//incluindo arquivo de conexão

include 'conexao.php';

//selecionar os dados no banco de dados

$select = "SELECT * FROM tb_user WHERE login = '$nome'";
$quely= mysqli_query($conexao.$select);

$result = mysqli_fetch_array($query);

//Dados do banco armazenado na variavel


$name_banco = echo $result['login'];
$senha_banco = $result['senha'];

//Comparação para acessar o sistema

if ($nome == $name_banco && $senha == $senha_banco) {

    header(location: 'cadastro_cliente.php')
} else{

    echo "<script>alert('Usuário Invalido!'; history.back())</script>";


}




?>
 
 <script>alert()

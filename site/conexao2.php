<?php
$servidor_bd = "127.0.0.1";

$usuario_bd = "root";

$senha_bd = "";

$banco_de_dados = "bd_contato";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$nome = $_POST["nome"];
$celular = $_POST["celular"];
$nomeUsuario = $_POST["nomeUsuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmSenha = $_POST["confirmSenha"];


$sql_inserir_usuario = "insert INTO cadastro(nome, celular, nomeUsuario, email,senha, confirmSenha ) values('$nome', '$celular', '$nomeUsuario',' $email','$senha', '$confirmSenha' 
)";
$um_usuario = mysqli_query($conexao, $sql_inserir_contato);

mysqli_close($conexao);

header("Location: index.php");
exit;
 
?>
<?php 

session_start();

include('conexao.php');
include('valida_usuario.php');

$id_funcao = $_SESSION['id_funcao'];
$select =  "SELECT tipo_usuario FROM usuarios";

$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="fundo_tipo_cadastro">
        
            <div class="logo_usuario">
                <img src="imagens/logo_fundo_removido.png" alt="Logo EventFlow">
            </div>
            
            <div class="tipo_de_usuario">
                <a href="cadastro_comum.html"><h1>Cadastro Comum</h1></a>
                <a href="cadastro_empresarial.html"><h1>Cadastro Empresarial</h1></a><br>
            </div>

            <div class="voltar_usuario">
                <a href="login.html"><h1>Voltar</h1></a>
            </div>
    </div>
</body>
</html>
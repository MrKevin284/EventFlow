<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empresarial</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form class="form_cadastro_empresarial" action="autenticar.php" method="POST">

        <div class="logo_cadastro_empresarial">
            <img src="assets/imagens/logo_fundo_removido.png" alt="Logo EventFlow">
        </div>

        <h1 id="usuario_empresarial">Usuário Empresarial</h1>

        <div class="login_cadastro_empresarial">
            <input type="text" placeholder="Nome" name="nome" required><br>
            <input type="number" placeholder="CNPJ" name="cnpj" required><br>
            <input type="number" placeholder="Telefone" name="telefone" required><br>
            <input type="text" placeholder="Empresa" name="empresa" required><br>
            <input type="email" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Senha" name="senha" required><br>
        </div>
        <div class="concluir_usuario_empresarial">
           <button type="submit" name="enviar" value="Entrar"><h1>Concluir</h1></button><br>
        </div>

        <div class="voltar_usuario_empresarial">
            <?php
                echo '<a href="tipo_de_usuario.php"><img src="assets/imagens/seta-voltar.png"></a>';
            ?>
         </div>

    </form>
</body>
</html>
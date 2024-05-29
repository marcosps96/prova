<!DOCTYPE html>
<html lang="pt">

<?php
require_once 'header.php';
require_once 'config.php';
require_once 'autenticar.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Turmas</title>
    <?php $key = uniqid(md5(rand())) ?>
    <link rel="stylesheet" href="styles.css?key=
    <?php echo $key ?>">
</head>

<body>
    <h2>Tela Inicial</h2>

    <div class="container">
        <form action="autenticar.php" method="post">
            <fieldset>
                <legend>Painel de login</legend>
                <input type="email" name="email" placeholder="Informe o e-mail" required>
                <input type="password" name="senha" placeholder="Insira sua senha" required>
                <input type="submit" name="entrar" value="Entrar">
            </fieldset>
        </form>
    </div>
</body>

<?php require_once 'footer.php'; ?>

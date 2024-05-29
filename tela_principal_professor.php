<?php
session_start();
require_once 'header.php';
require_once 'config.php';
require_once 'professorDB.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $professor = buscaProfessor($conn, $email);
}

// Verificar se o usuário está autenticado
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Verificar se o botão de logout foi clicado
if (isset($_POST['logout'])) {
    // Limpar todas as variáveis de sessão
    session_unset();
    // Destruir a sessão
    session_destroy();
    // Redirecionar para a página de login
    header("Location: login.php");
    exit();
}
?>

<body>
    <h2>Bem-vindo à Tela Principal do Professor</h2>
    <div class="container">
        <p>Você está autenticado como: <?php echo $professor['nome']; ?></p>
        <!-- Conteúdo específico para o professor -->
        <!-- Adicione o botão de logout -->
        <form method="post">
            <button class="btn-vermelho" type="submit" name="logout">Sair</button>
        </form>
    </div>

</body>

</html>

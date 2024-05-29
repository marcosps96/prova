<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$senha = md5($_POST["senha"]);
	$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
		// Autenticação bem-sucedida, criar sessão
		$_SESSION['email'] = $email;
		header("Location: tela_principal_professor.php");
		exit();
	} else {
		// Falha na autenticação
		header("Location: login.php");
		exit();
	}
}

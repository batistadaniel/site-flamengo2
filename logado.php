<?php
session_start();
include_once('conexao.php');

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['msg'] = "LOGADO";
    header('Location: index.php');
} else {
    $_SESSION['msg'] = "E-mail ou senha incorretos.";
    header('Location: index.php');
}
exit();

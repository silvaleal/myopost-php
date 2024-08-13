<?php
require '../../config.php';

$dados = validate([
    "email" => "e",
    "password" => "s",
]);

if (isEmpty($dados)) {
    setFlashMsg('login', 'Preencha os dados!');
    header('location:../login');
    return;
}

if (!getUserLogin($dados['email'], $dados['password'])) {
    setFlashMsg('login', 'Conta não encontrada!');
    header('location:../login');
    return;
}

$_SESSION['perfil'] = getUser($dados["email"]);
header('location:../');
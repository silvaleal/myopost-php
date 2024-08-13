<?php
require '../../config.php';

$dados = validate([
    "name" => "s",
    "nickname" => "s",
    "email" => "e",
    "password" => "s",
    "password2" => "s"
]);

if (isEmpty($dados)) {
    setFlashMsg('cadastro', 'Preencha os dados!');
    header('location:../cadastro');
    return;
}


if ($dados['password']!=$dados['password2']) {
    setFlashMsg('cadastro', 'Senhas diferentes!');
    header('location:../cadastro');
    return;
}

if (getUser($dados['email'])) {
    setFlashMsg('cadastro', 'Email já cadastrado!');
    header('location:../cadastro');
    return;
}

if (getUser($dados['nickname'])) {
    setFlashMsg('cadastro', 'Apelido já cadastrado!');
    header('location:../cadastro');
    return;
}

if (getUser($dados['name'])) {
    setFlashMsg('cadastro', 'Nome já cadastrado!');
    header('location:../cadastro');
    return;
}
registerUser($dados['name'], $dados['nickname'], $dados['email'], $dados['password']);
$_SESSION['perfil'] = getUser($dados["email"]);
header('location:../');
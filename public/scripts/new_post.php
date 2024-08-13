<?php
require "../../config.php";

$dados = validate([
    "title" => "s",
    "content" => "s"
]);

if (isEmpty($dados)) {
    setFlashMsg('new_post', 'Preencha os dados');
    header('location:/new_post');
    return;
}
registerPost($dados['title'], $dados['content'], 'Parte não completa!', $_SESSION['perfil']['author_id']);
$lastPost = getPostLastUser($_SESSION['perfil']['author_id']);
header("location:/post?id={$lastPost['post_id']}");
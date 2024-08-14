<?php
require "../../config.php";

$dados = validate(["title" => "s", "content" => "s"]);

if (isEmpty($dados)) {
    setFlashMsg('new_post', 'Preencha os dados');
    header('location:/new_post');
    return;
}

if (!$_FILES["thumbnail"]["error"]) {
    $file = $_FILES["thumbnail"];
    $thumbnailID = uniqid();
    $validExtensions = ["png", "jpg", "jpeg"];
    $extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    if (!in_array($extension, $validExtensions)) {
        setFlashMsg('new_post', "Extensão de arquivo ({$extension}) inválido!");
        header('location:/new_post');
        return;
    }

    if ($file['size'] > 2097152) {
        setFlashMsg('new_post', 'Arquivo muito grande! (Max: 2MB)');
        header('location:/new_post');
        return;
    }
    $path = "../assets/imgs/posts/".$thumbnailID.".{$extension}";
    move_uploaded_file($file['tmp_name'], $path);
    registerPost($dados['title'], $dados['content'], $thumbnailID, $extension , $_SESSION['perfil']['author_id']);
} else {registerPost($dados['title'], $dados['content'], NULL, NULL, $_SESSION['perfil']['author_id']);}

$lastPost = getPostLastUser($_SESSION['perfil']['author_id']);
header("location:/post?id={$lastPost['post_id']}");
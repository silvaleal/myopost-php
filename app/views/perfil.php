<?php if(!getLogged()) header("location:/") ?>

<h2><?php echo "Olá,".$_SESSION['perfil']['author_nickname'];?></h2>
<li>
    <a href="/new_post">Criar postagem!</a>
    <a href="?action=disconnect">Desconectar</a>
</li>

<h3>Suas postagens</h3>
<?php foreach (getPostByUser($_SESSION['perfil']['author_id']) as $post):?>
- <a href=<?php echo "/post?id={$post['post_id']}"?>><?php echo $post['post_title']; ?></a>
<br>
<?php endforeach;?>
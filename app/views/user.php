<?php require "scripts/user.php"; ?>
<?php require "layouts/navbar.php"; ?>
<h2><?php echo $user['author_nickname']; ?></h2>

<h3>Postagens do usuário</h3>
<?php foreach (getPostByUser($user['author_id']) as $post): ?>
    <a href=<?php echo "/post?id={$post['post_id']}" ?>>
        <?php echo $post['post_title']; ?>
        <i class='fa-regular fa-heart'></i><?php echo $post['post_likes']; ?>
        <br>
    </a>
<?php endforeach; ?>

<?php require "layouts/footer.php"; ?>
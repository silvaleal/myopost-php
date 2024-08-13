<?php require "layouts/navbar.php"; ?>

<div class="posts">
    <?php foreach (getPostsRecents() as $post): ?>
        <a href=<?php echo "/post?id={$post['post_id']}" ?>>
            <?php echo $post['post_id'];?>
            <?php echo $post['post_title'];?>
            <?php echo "<i class='fa-regular fa-heart'></i>".$post['post_likes'];?>
            <?php echo "<br>";?>
        </a>
    <?php endforeach;?>
</div>

<?php require "layouts/footer.php"; ?>
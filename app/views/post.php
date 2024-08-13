<?php require "scripts/post.php"; ?>
<link rel="stylesheet" href="assets/style/post.css">

<?php require "layouts/navbar.php"; ?>

<div class="container post">
    <div class="container-title">
        <h3><?php echo $post["post_title"]; ?></h3> 
        <a href=<?php echo "/user?id={$author["author_id"]}" ?>><?php echo $author['author_nickname'] ?></a>
        <div class=""><?php echo "<a href='/scripts/like.php?post_id={$post['post_id']}'><i class='fa-regular fa-heart'></i></a>".$post["post_likes"]; ?></div>
    </div>
    <?php echo "<pre>{$post['post_desc']}</pre>"; ?>
</div>
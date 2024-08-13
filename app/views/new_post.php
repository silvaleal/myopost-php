<?php require "layouts/navbar.php"; ?>

<body>
    <div class="container">
        <h2 class="mt-5">Criar Postagem</h2>
        <form action="scripts/new_post.php" method="post">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" placeholder="Digite o título da postagem">
            </div>
            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea class="form-control" name="content" rows="5" placeholder="Digite o conteúdo da postagem"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
    <?php echo getFlashMsg('new_post'); ?>
</body>
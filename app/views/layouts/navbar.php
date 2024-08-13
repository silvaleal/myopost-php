<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">myoPost</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex w-100 align-items-center justify-content-between">
                    <div class="navbar-menus mx-auto">
                        <li>
                            <a href="./">Últimas postagens</a>
                            <a href="/melhores">Melhores postagens</a>
                        </li>
                    </div>

                    <?php if (isset($_SESSION['perfil'])):?>
                        <?php echo "Olá, {$_SESSION['perfil']['author_nickname']}"; ?>
                        <a href="/perfil">Sua conta</a>
                    <?php else: ?>
                        <div class="navbar-account">
                            <li class="nav-item">
                                <a class="nav-link" href="login">Acessar conta</a>
                                <a class="nav-link" href="cadastro">Cadastrar conta</a>
                            </li>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</section>
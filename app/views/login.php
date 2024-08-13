<body>
    <div class="container">
        <h2 class="mt-5">Login</h2>
        <form action="scripts/login.php" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="cadastro">Não tem uma conta? Crie aqui!</a>
        </form>
    </div>
    <?php echo getFlashMsg('login'); ?>
</body>
<body>
    <div class="container">
        <h2 class="mt-5">Cadastro</h2>
        <form action="scripts/cadastro.php" method="post">
            <div class="form-group">
                <label for="name">Nome verdadeiro</label>
                <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="name">Apelido</label>
                <input type="text" class="form-control" name="nickname" placeholder="Como gostaria de ser chamado?">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar Senha</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirme sua senha">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="login">Já tem uma conta? Entre nela!</a>
        </form>
    </div>
    <?php echo getFlashMsg('cadastro'); ?>
</body>
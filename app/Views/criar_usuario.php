<html>
<head>
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar Usuário</h1>
    <form action="<?= base_url('/usuarios/salvar') ?>" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="<?= base_url('usuarios') ?>">Voltar</a>
</body>
</html>

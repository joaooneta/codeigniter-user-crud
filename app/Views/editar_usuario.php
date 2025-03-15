<html>
<head>
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="<?= base_url('usuarios/atualizar/' . $usuario['id']) ?>" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br>
        <button type="submit">Atualizar</button>
    </form>
    <a href="<?= base_url('usuarios') ?>">Voltar</a>
</body>
</html>

<html>
    <body>
        <h1>Lista de Usuários</h1>
        <a href="<?= base_url('usuarios/criar') ?>">Inserir usuário</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <a href="<?= base_url('usuarios/editar/' . $usuario['id']) ?>">Editar</a>
                        <a href="<?= base_url('usuarios/excluir/' . $usuario['id']) ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
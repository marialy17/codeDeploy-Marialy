<h2>Lista de Usuarios</h2>

<a href="<?= site_url('users/create') ?>">Crear nuevo usuario</a><br><br>

<table border="1" cellpadding="10">
<tr>
    <th>Nombre</th>
    <th>Email</th>
    <th>Rol</th>
    <th>Departamento</th>
</tr>

<?php foreach($users as $u): ?>
<tr>
    <td><?= $u->name ?></td>
    <td><?= $u->email ?></td>
    <td><?= $u->role ?></td>
    <td><?= $u->department ?></td>
</tr>
<?php endforeach; ?>
</table>
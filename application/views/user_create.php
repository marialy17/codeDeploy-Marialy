<h2>Crear Usuario</h2>

<form method="POST">

Nombre: <input type="text" name="name" required><br><br>
Email: <input type="text" name="email" required><br><br>
Contraseña: <input type="password" name="password" required><br><br>

Rol:
<select name="role_id">
<?php foreach($roles as $r): ?>
    <option value="<?= $r->id ?>"><?= $r->name ?></option>
<?php endforeach; ?>
</select><br><br>

Departamento:
<select name="department_id">
<?php foreach($departments as $d): ?>
    <option value="<?= $d->id ?>"><?= $d->name ?></option>
<?php endforeach; ?>
</select><br><br>

<button type="submit">Guardar</button>

</form>
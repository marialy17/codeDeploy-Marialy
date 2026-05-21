<?php
include 'db.php';
?>

<h2>Lista de Usuarios</h2>
<h3>Deployment automático funcionando </h3>
<a href="create.php">Crear nuevo usuario</a><br><br>

<table border="1" cellpadding="10">
<tr>
    <th>Nombre</th>
    <th>Email</th>
    <th>Rol</th>
    <th>Departamento</th>
</tr>

<?php
$sql = "SELECT 
            users.name,
            users.email,
            roles.name AS role,
            departments.name AS department
        FROM users
        JOIN roles ON users.role_id = roles.id
        JOIN departments ON users.department_id = departments.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['role']}</td>
                <td>{$row['department']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay usuarios</td></tr>";
}
?>
</table>
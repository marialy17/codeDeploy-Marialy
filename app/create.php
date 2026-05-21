<?php
include "db.php";
?>

<h2>Crear Usuario</h2>

<form method="POST">
    Nombre: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Contraseña: <input type="password" name="password" required><br><br>

    Rol: 
    <select name="role_id" required>
        <?php
        $roles = $conn ->query("SELECT * FROM roles");
        while($r =$roles -> fetch_assoc()){
            echo "<option value='{$r['id']}'>{$r['name']}</option>";
        }
        ?>
    </select> <br><br>
    Departamento: 
    <select name="department_id" required>
        <?php
        $departments = $conn ->query("SELECT * FROM departments");
        while($d =$departments -> fetch_assoc()){
            echo "<option value='{$d['id']}'>{$d['name']}</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Guardar</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role_id = $_POST["role_id"];
    $department_id = $_POST["department_id"];

    $sql = "INSERT INTO users (name, email, password, role_id, department_id) VALUES ('$name', '$email', '$password', $role_id, $department_id)";

    if($conn -> query($sql) === TRUE){
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
}
?>
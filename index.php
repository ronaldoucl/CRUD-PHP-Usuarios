<?php
include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Usuarios CRUD</title>
</head>
<body>
    <div>
        <form action="insert_user.php" method="post">
            <h1>Crear Usuario</h1>
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="lastname" placeholder="Apellido" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="text" name="email" placeholder="Email" required>

            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

    <div>
        <h2>Usuario Registrados</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                    <th><?= $row["id"]?></th>
                    <th><?= $row["nombre"]?></th>
                    <th><?= $row["apellido"]?></th>
                    <th><?= $row["username"]?></th>
                    <th><?= $row["password"]?></th>
                    <th><?= $row["email"]?></th>

                    <th><a href="update.php?id=<?= $row["id"] ?>">Editar</a></th>
                    <th><a href="delete_user.php?id=<?= $row["id"] ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php

include("connection.php");

$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Actualizar Usuario</title>
</head>

<body>
    <form action="edit_user.php" method="post">
        <h1>Actualizar Usuario</h1>
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input type="text" name="name" placeholder="Nombre" value="<?=$row["nombre"]?>">
        <input type="text" name="lastname" placeholder="Apellido" value="<?=$row["apellido"]?>">
        <input type="text" name="username" placeholder="Username" value="<?=$row["username"]?>">
        <input type="text" name="password" placeholder="Password" value="<?=$row["password"]?>">
        <input type="text" name="email" placeholder="Email" value="<?=$row["email"]?>">

        <input type="submit" value="Actualizar Usuario">
</body>

</html>
<?php

include("connection.php");
$con = connection();

$con = connection();

$id = isset($_POST["id"]) ? $_POST["id"] : '';;
$name = isset($_POST["name"]) ? $_POST["name"] : '';
$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : '';
$username = isset($_POST["username"]) ? $_POST["username"] : '';
$password = isset($_POST["password"]) ? $_POST["password"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';


$sql = "UPDATE users SET nombre='$name', apellido='$lastname', username='$username', password='$password', email='$email' where id=$id";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
};

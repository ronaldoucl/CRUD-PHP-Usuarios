<?php

include("connection.php");

$con = connection();

$id = null;
$name = isset($_POST["name"]) ? $_POST["name"] : '';
$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : '';
$username = isset($_POST["username"]) ? $_POST["username"] : '';
$password = isset($_POST["password"]) ? $_POST["password"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';


$sql = "INSERT INTO users VALUES('$id', '$name', '$lastname', '$username', '$password', '$email');";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
};


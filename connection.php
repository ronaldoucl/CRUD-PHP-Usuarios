<?php

function connection() {
    // Configuración de la conexión
    $hostname = "localhost"; 
    $username = "root"; 
    $password = "ronaldocampos1"; 
    $database = "users_crud_php"; 

    // Crear conexión
    $conn = new mysqli($hostname, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Si la conexión es exitosa, retorna el objeto de conexión
    return $conn;
}
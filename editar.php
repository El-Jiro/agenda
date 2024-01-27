<?php

session_start();
include_once('conexion.php');

if (isset($_POST['edit'])) {

    $database = new Conexion();
    $db = $database->open();


    if ($db !== null) {

        try {
            $id = $_GET['id'];
            $name = $_POST['nombre'];
            $phone = $_POST['tel'];
            $email = $_POST['email'];
            $address = $_POST['dir'];

            $sql = "UPDATE personas SET nombre = '$name', telefono = '$phone', 
            correo = '$email', direccion = '$address' WHERE id = '$id'";

            $_SESSION['message'] = $db->exec($sql) ? 'Contacto actualizado correctamente' : 'Error al actualizar el contacto';
        } catch (PDOException $e) {
            $_SESSION['message'] = $e->getMessage();
        }

        if ($database->conn !== null) {
            $database->close();
        }
    } else {
        $_SESSION['message'] = 'Error connecting to the database';
    }
} else {
    $_SESSION['message'] = 'Por favor rellene todos los campos para continuar';
}
header('location: index.php');

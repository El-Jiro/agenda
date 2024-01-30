<?php

session_start();
include_once('conexion.php');

if (isset($_GET['id'])) {

    $database = new Conexion();
    $db = $database->open();

    if ($db !== null) {

        try {
            $id = $_GET['id'];

            $sql = "DELETE FROM personas WHERE id = '$id'";

            $_SESSION['message'] = $db->exec($sql) ? 'Contacto eliminado correctamente' : 'Error al eliminar el contacto';
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
    $_SESSION['message'] = 'Seleccione un contacto para eliminar';
}

header('location: index.php');

<?php

session_start();
include_once('conexion.php');


function validateMail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function validatePhoneNumber($phone)
{

    $phonePattern = '/^5\d{9}$/';

    return preg_match($phonePattern, $phone) ? true : false;
}

if (isset($_POST['edit'])) {

    if (validateMail($_POST['email'])) {

        if (validatePhoneNumber($_POST['tel'])) {
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
            $_SESSION['message'] = 'El número telefónico no es válido, debe seguir este formato: 5535648909';
        }
    } else {
        $_SESSION['message'] = 'El correo electrónico no es válido, debe seguir este formato: alguien@ejemplo.com';
    }
} else {
    $_SESSION['message'] = 'Seleccione un contacto para actualizar';
}

header('location: index.php');

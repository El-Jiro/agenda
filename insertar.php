<?php

session_start();
include_once('conexion.php');

function validateFields($fields)
{
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            return false;
        }
    }
    return true;
}

function validateMail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

if (isset($_POST['add'])) {

    $requiredFields = ['nombre', 'tel', 'email', 'dir'];

    if (validateFields($requiredFields)) {

        if (validateMail($_POST['email'])) {
            $database = new Conexion();
            $db = $database->open();
            if ($db !== null) {

                try {
                    $sql = 'INSERT INTO personas (nombre, telefono, correo, direccion) VALUES (:nombre, :tel, :email, :dir)';
                    $stmt = $db->prepare($sql);

                    $values = [
                        ':nombre' => $_POST['nombre'],
                        ':tel' => $_POST['tel'],
                        ':email' => $_POST['email'],
                        ':dir' => $_POST['dir']
                    ];

                    $_SESSION['message'] = $stmt->execute($values) ? 'Contacto agregado correctamente' : 'Error al agregar el contacto';
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
            $_SESSION['message'] = 'El correo electrónico no es válido';
        }
    } else {
        $_SESSION['message'] = 'Por favor rellene todos los campos para continuar';
    }
} else {
    $_SESSION['message'] = 'Por favor rellene todos los campos para continuar';
}


header('location: index.php');

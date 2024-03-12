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

function validatePhoneNumber($phone)
{

    $phonePattern = '/^`\d{9}$/';

    return preg_match($phonePattern, $phone) ? true : false;
}

if (isset($_POST['add'])) {

    $requiredFields = ['nombre', 'tel', 'email', 'dir'];

    if (validateFields($requiredFields)) {

        if (validateMail($_POST['email'])) {

            if (validatePhoneNumber($_POST['tel'])) {
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
                $_SESSION['message'] = 'El número telefónico no es válido, debe seguir este formato: 5535648909';
            }
        } else {
            $_SESSION['message'] = 'El correo electrónico no es válido, debe seguir este formato: alguien@ejemplo.com';
        }
    } else {
        $_SESSION['message'] = 'Debe rellenar todos los campos para agregar un contacto';
    }
} else {
    $_SESSION['message'] = 'Debe rellenar todos los campos para agregar un contacto';
}


header('location: index.php');

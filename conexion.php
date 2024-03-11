<?php
class Conexion
{
    private string $server = "mysql:host=localhost; dbname=agenda";
    private string $user  = "root";
    private string $password = "";
    private array $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    public $conn;

    public function open()
    {
        try {
            //code...
            $this->conn = new PDO(
                $this->server,
                $this->user,
                $this->password,
                $this->options
            );

            return $this->conn;
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: {$e->getMessage()} ";
        }
    }

    public function close()
    {
        $this->conn = null;
    }
}

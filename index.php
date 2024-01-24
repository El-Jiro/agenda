<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Kevin Jofraly Pérez López">
    <link rel="icon" href="../../../../favicon.ico">
    <script src="https://kit.fontawesome.com/e56f733d59.js" crossorigin="anonymous"></script>
    <title>Agenda de Contactos Personal</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Impartiendo Conocimiento</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Redes Sociales</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Youtube</a>
                        <a class="dropdown-item" href="#">Facebook </a>
                        <a class="dropdown-item" href="#">Twitter </a>
                        <a class="dropdown-item" href="#">Instagram</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <h1 class="page-header text-center">Agenda de contactos personal</h1>
        <div class="row">
            <div class="col -sm-12">
                <a href="#addModal" class="btn btn-primary" data-toggle="modal"> <span class="fa fa-plus">&nbsp;</span>Nuevo</a>

                <table class="table table-bordered table-striped" style="margin-top: 3vh;">
                    <thead>
                        <th class="text-center">ID</th>
                        <th class="text-center">NOMBRE DE CONTACTO</th>
                        <th class="text-center">TÉLEFONO</th>
                        <th class="text-center">CORREO</th>
                        <th class="text-center">DIRECCIÓN</th>
                        <th class="text-center">ACCIONES</th>
                    </thead>
                    <tbody>
                        <?php

                        include_once('conexion.php');

                        $conn = new Conexion;
                        $db = $conn->open();

                        try {
                            $sql = 'SELECT * FROM personas';
                            foreach ($db->query($sql) as $row) {
                        ?>
                                <tr class="text-center">
                                    <td> <?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['correo']; ?></td>
                                    <td><?php echo $row['direccion']; ?></td>
                                    <td><a href=" #">Editar</a> <a href="#">Eliminar</a></td>


                                </tr>
                        <?php
                            }
                        } catch (PDOException $e) {
                            echo 'Error al conectar con la base de datos: ' . $e->getMessage();
                        };
                        $conn->close();
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /.container -->
    <?php include('addModal.php'); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
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
                <button class="btn btn-outline-success my-2" type="submit" style="position:absolute; left:44vw; top:0.2vh">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <h1 class="page-header text-center">Agenda de contactos personal</h1>
        <button class="btn btn-primary" data-toggle="modal"> <span class="fa fa-plus">&nbsp;</span>Nuevo</button>
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

            </tbody>
        </table>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<div id="edit_<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title">Editar contacto</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Add the rest of your modal body here -->
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="editar.php?id=<?php echo $row['id']; ?>" method="post">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" id="name" class="form-control" value="<?php echo $row['nombre']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Télefono: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" name="tel" id="phone" class="form-control" value="<?php echo $row['telefono']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Correo: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" name="email" id="mail" class="form-control" value="<?php echo $row['correo']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Dirección: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="dir" id="address" class="form-control" value="<?php echo $row['direccion']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <span class="fa fa-close">
                                    &nbsp;
                                </span>
                                Cancelar
                            </button>
                            <button type="submit" name="edit" class="btn btn-success">
                                <span class="fa fa-check">
                                    &nbsp;
                                </span>
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
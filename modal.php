<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title">Agregar contacto</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Add the rest of your modal body here -->
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="#" method="post">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Télefono: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" name="tel" id="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Correo: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" name="correo" id="mail" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Dirección: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="dor" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <span class="fa fa-close">
                                    &nbsp;
                                </span>
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <span class="fa fa-save">
                                    &nbsp;
                                </span>
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="delete_<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title">Eliminar contacto</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Add the rest of your modal body here -->
            <div class="modal-body">
                <p class="text-center">¿Está seguro de que desea eliminar los datos de este contacto?</p>
                <h3 class="text-center"><?php echo $row['nombre']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="fa fa-close">
                        &nbsp;
                    </span>
                    Cancelar
                </button>
                <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                    <span class="fa fa-trash"></span>
                    Eliminar
                </a>
            </div>
        </div>
    </div>
</div>
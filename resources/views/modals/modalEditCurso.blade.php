<div id="modalEditEsto" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Editar Curso</h4>
                <div class="modal-body">
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <input class="form-control" type="text" placeholder="Nombre" id="example-text-input" name="nombreCurso">
                        </div>
                    </div>
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <textarea class="form-control" name="sDescripcion" placeholder="Descripción del curso" style="height: 100px; width: 542px; resize:none;"></textarea>
                        </div>
                    </div>
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <input class="form-control" type="text" placeholder="Cupo" id="example-text-input" name="iCupo">
                        </div>
                    </div>
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <input class="form-control" type="text" placeholder="Precio" id="example-text-input" name="dPrecio">
                        </div>
                    </div>
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <input class="form-control" type="text" placeholder="Fecha Ejemplo: 10/22/17" id="example-text-input" name="sFecha">
                        </div>
                    </div>
                    <input type="hidden" name="Cursoid"> 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnEditarCurso">Editar</button>
                    <button style="background-color: rgb(153, 0, 0); border-color: rgb(153, 0, 0);" class="btn btn-primary" id="btnCancelar" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
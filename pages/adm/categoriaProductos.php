<?php
include_once("../plantilla_validar.php");
?>
<div class="row">
    <div class="col-md-6">
        <div class="box box-danger" style="padding: 10px;">
            <table id="example" class="table table-condensed table-hover" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box box-danger" style="padding: 10px;">

            <!--        tabla telefonos-->
            <table id="example_telefonos" class="table table-condensed table-hover" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Telefono</th>
                    <th>Operador</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Telefono</th>
                    <th>Operador</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>






<!--        Persona-->

<div id="mPersona" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Persona</h4>
            </div>
            <div class="modal-body">
                <form id="fPersona" class="form-horizontal">
                    <div class="form-group">
                        <label for="tbDNI" class="col-sm-3 control-label">DNI</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbDNI" name="dni" maxlength="8" style="width: 120px">
                            <input type="hidden" class="form-control" id="tbId" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbNombres" class="col-sm-3 control-label">Nombres</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbNombres" name="nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbPaterno" class="col-sm-3 control-label">Ap. Paterno</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbPaterno" name="paterno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbMaterno" class="col-sm-3 control-label">Ap. Materno</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbMaterno" name="materno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sexo</label>
                        <div class="col-sm-9">
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="sexo" id="rbMasculino" value="M" checked="checked"> Masculino
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sexo" id="rbFemenino" value="F"> Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6 text-left">
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-xs-6">
                        <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--        Telefonos-->
<div id="mTelefonos" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Telefonos</h4>
            </div>
            <div class="modal-body">
                <form id="fTelefonos" class="form-horizontal">
                    <div class="form-group">
                        <label for="tbTelefono" class="col-sm-3 control-label">Telefono</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbTelefono" name="telefono" maxlength="9" style="width: 120px">
                            <input type="hidden" class="form-control" id="tbTelefonoId" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbOperador" class="col-sm-3 control-label">Operador</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbOperador" name="operador">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-6 text-left">
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-xs-6">
                        <button type="button" id="btnGuardarTelefono" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<input type="hidden" id="idPers" value="0">
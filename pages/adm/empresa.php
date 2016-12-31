<?php
//session_start();
include_once("../plantilla_validar.php");

?>
<script>
    $(function () {
        bootbox.setLocale("es");

        toastr.options = {
            "closeButton": false,
            "positionClass": "toast-top-center",
            "showEasing": "linear",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "hideDuration": "50",
        }


        var dtId = "empresa";

        // tabla y modal persona
        var mEmp = $("#mEmpresa");
        var fEmp = $("#fEmpresa");

        var dt = $('#' + dtId).DataTable({
            // select: true,
            select: "single",
            processing: true,
            serverSide: true,
            responsive: true,
            lengthMenu: [ [15, 25, 50, 100, -1], [15, 25, 50, 100, "Todo"] ],
            ajax:{
                url :"funciones/adminEmpresa.php?f=1",
                type: "post",
//            error: function(){
//                $(".example-error").html("");
//                $("#example").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
//                $("#example_processing").css("display","none");
//
//            }
            },
            "dom": "<'row text-sm'<'col-xs-6'B><'col-xs-6 text-right'f>>t<'row text-sm'<'col-xs-6 col-sm-4'<'#tbR'>i><'col-xs-6 col-sm-4 text-center'l><'col-xs-12 col-sm-4 text-right'p>>",
            buttons: [
                {
                    text: "<span class='glyphicon glyphicon-plus'></span> Agregar",
                    className: "btn-sm",
                    action: function ( e, dt, node, config ) {
                        $("#tbId").val(0);
                        $("#mEmpresa").find(".modal-title").html("Nueva Empresa");
                        mEmp.modal('show');
                        $('.modal-backdrop').removeClass();
                    }
                }
            ],
            columnDefs: [{
                targets: -1,
                data: null,
                defaultContent: "<span class='glyphicon glyphicon-pencil dt-btn dt-btn-editar'></span> &nbsp; <span class='glyphicon glyphicon-trash dt-btn dt-btn-eliminar'></span>",
                className: "text-center",
                responsivePriority: -1,
            }],
            columns: [
                { "data": "id", "visible": false},
                { "data": "razonsocial"},
                { "data": "ruc" },
                { "data": "nombre" },
                { "data": "siglas" },
                { "data": "direccion" },
                { "data": "correo" },
                { "data": "telefono" },
                { "data": "web" },
                { "data": "usuario" },
                { "data": "clave" },
                { "data": "superadmin", "visible": false},
                { "data": null, "orderable": false}
            ],
            order: [[0, "desc"]]
        });

        $("#tbR").css("display","inline").html('<button type="button" class="btn btn-default btn-sm btn-refrescar" ><span class="glyphicon glyphicon-refresh" id="btnRefrescar"></span>');

        $("#tbR").on('click', '.btn-refrescar', function () {
            dt.ajax.reload(null, false);
        });


        $('#' + dtId + ' tbody').on('click', '.dt-btn-editar', function () {
            var fila = dt.row($(this).parents('tr')).data();

            $("#mEmpresa").find(".modal-title").html("Editar Empresa");

            $("#tbId").val(fila.id);
            $("#tbRazonSocial").val(fila.razonsocial);
            $("#tbRUC").val(fila.ruc);
            $("#tbNombre").val(fila.nombre);
            $("#tbSiglas").val(fila.siglas);
            $("#tbDireccion").val(fila.direccion);
            $("#tbCorreo").val(fila.correo);
            $("#tbTelefono").val(fila.telefono);
            $("#tbWeb").val(fila.web);
            $("#tbUsuario").val(fila.usuario);
            $("#tbClave").val(fila.clave);
            $("#tbSuperAdmin").val(fila.superadmin);

            mEmp.modal('show');
            $('.modal-backdrop').removeClass();
        });

        $("#btnGuardar").on("click",function(){
            fEmp.waitMe({ text : 'Guardando...' });
            var data = fEmp.serializeArray();
            data.push({name: 'f', value: $("#tbId").val()==0 ? 2 :3 });

            $.post("funciones/adminEmpresa.php", data, function(d) {
                if (!d.success) {
                    bootbox.alert(d.msg);
                }
                else {
                    toastr["success"](d.msg);
                    mEmp.modal('hide');
                    dt.ajax.reload();
                }
                fEmp.waitMe('hide');
            },'json');
        });


        $('#' + dtId + ' tbody').on('click', '.dt-btn-eliminar', function () {
            contenedorTabla = $("#" + dtId).parents(".dataTables_wrapper");

            var da = dt.row($(this).parents('tr')).data();
            bootbox.confirm("¿Seguro que desea eliminar la empresa <b>" + da.razonsocial + "</b>?", function(rpta){
                if(rpta){
                    contenedorTabla.waitMe({ text: 'Eliminando...' });
                    $.post("funciones/adminEmpresa.php", {"f": 4, id: da.id }, function(d){
                        if(!d.success){
                            $.toast({
                                text: d.msg,
                                position: 'mid-center',
                                icon: 'error'
                            })
                        }else{
                            $.toast({
                                text: "El registro se eliminó correctamente.",
                                position: 'mid-center',
                                icon: 'success'
                            })
                            dt.ajax.reload();
                        }
                        contenedorTabla.waitMe('hide');
                    },"json");
                }
            });
        });

        mEmp.on('shown.bs.modal', function (e) {
            $("#tbDNI").focus();
        });
        mEmp.on('hidden.bs.modal', function (e) {
            $('#fEmpresa')[0].reset();
            fEmp.waitMe('hide');
        });
// fin persona
    });
</script>
<div class='table-responsive'>
<div class="box box-danger" style="padding: 10px;">
    <table id="empresa" class="table table-condensed table-hover" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>Razon social</th>
            <th>RUC</th>
            <th>Nombre</th>
            <th>Siglas</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Web</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Super Admin</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        </tbody>
        <!--            <tfoot>-->
        <!--            <tr>-->
        <!--                <th>id</th>-->
        <!--                <th>DNI</th>-->
        <!--                <th>Nombres</th>-->
        <!--                <th>Apellido Paterno</th>-->
        <!--                <th>Apellido Materno</th>-->
        <!--                <th>Sexo</th>-->
        <!--                <th></th>-->
        <!--            </tr>-->
        <!--            </tfoot>-->
    </table>
</div>
</div>


<div id="mEmpresa" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Empresa</h4>
            </div>
            <div class="modal-body">
                <form id="fEmpresa" class="form-horizontal">
                    <div class="form-group">
                        <label for="tbRazonSocial" class="col-sm-3 control-label">Razón Social</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbRazonSocial" name="razonsocial" maxlength="50" style="width: 120px" autofocus>
                            <input type="hidden" class="form-control" id="tbId" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbRUC" class="col-sm-3 control-label">RUC</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbRUC" name="ruc">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbNombre" class="col-sm-3 control-label">Nombre Comercial</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbNombre" name="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbSiglas" class="col-sm-3 control-label">Siglas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbSiglas" name="siglas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbDireccion" class="col-sm-3 control-label">Direccion</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbDireccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbCorreo" class="col-sm-3 control-label">Correo</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="tbCorreo" name="correo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbTelefono" class="col-sm-3 control-label">Telefono</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbTelefono" name="telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbWeb" class="col-sm-3 control-label">Web</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbWeb" name="web">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbUsuario" class="col-sm-3 control-label">Usuario</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbUsuario" name="usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tbClave" class="col-sm-3 control-label">Clave</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tbClave" name="clave">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="hidden" class="form-control" id="tbSuperAdmin" name="superadmin">
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
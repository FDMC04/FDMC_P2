<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Personas</title>
</head>
<body>
    <header>
        <?php
            include '../nav.php';
        ?>
    </header>
    <div class="container">
        <div class="row">        
            <div class="col-md-12">
                <h1 align="center">ADMINISTRACIÓN DE PERSONAS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="lista_personas"class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Ap. Paterno</th>
                            <th>Ap. Materno</th>
                            <th>Sexo</th>
                            <th>CURP</th>
                            <th>Fecha</th>
                            <th width="5%"></th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNuevo" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 align="center" class="modal-title">Personas | Nuevo Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                        <span aria-hidden="true" >&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="persona" >
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ap_paterno">Apellido Paterno:</label>
                                    <input type="text" name="ap_paterno" id="ap_paterno" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ap_materno">Apellido Materno:</label>
                                    <input type="text" name="ap_materno" id="ap_materno" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sexo">Sexo:</label>
                                    <input type="text" name="sexo" id="sexo" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="curp">CURP:</label>
                                    <input type="text" name="curp" id="curp" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn close btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btnGuardar" class="btn btn-danger">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Todo lo que este dentro se ejecuta al dar click al boton
        $('#btnGuardar').click(function(){
            var nombre = $('#nombre').val();
            var ap_paterno = $('#ap_paterno').val();
            var ap_materno = $('#ap_materno').val();
            var sexo = $('#sexo').val();
            var curp = $('#curp').val();

            if(nombre == "" || ap_paterno ==""|| ap_materno==""){
                Swal.fire("Existen campos vacios");
            }else{
                Swal.fire({
                    title: "¿Deseas guardar el registro?",
                    showCancelButton: true,
                    confirmButtonText: "Guardar"
                }).then((result) => {
                    if(result.isConfirmed){
                        Swal.fire("Registro guardado!", "", "success");
                    }
                    $.ajax({
                        url: "insertarpersonas.php",
                        type: "POST",
                        data:{
                            nombre: nombre,
                            ap_paterno: ap_paterno,
                            ap_materno: ap_materno ,
                            sexo: sexo,
                            curp: curp
                        },
                        success: function(response){
                            if(response=="ok"){
                                // Esta linea cierra el modal al detectar la respuesta correcta
                                $("#modalNuevo").modal("toggle");
                                $("#nombre").val("");
                                $("#ap_paterno").val("");
                                $("#ap_materno").val("");
                                $("#sexo").val("");
                                $("#curp").val("");
                                $('#lista_personas').DataTable().ajax.reload();
                            }else{
                                alert("Ha ocurrido un error");
                                console.log(response);
                            }
                        }
                    })
                });
                
            }
        });
        $(document).ready(function(){
            cargar_tabla();
        });
        function cargar_tabla(){
            // $("#lista_personas").dataTable().fnDestroy();
            $("#lista_personas").dataTable({
                language: {"url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"},
                responsive: "true",
                dom: 'Bfrtilp',
                buttons:[
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"> Excel</i> ',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"> PDF</i> ',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa-solid fa-print"> Imprimir</i> ',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-warning'
                    },
                    {
                        text: '<i class="fa fa-plus square"> Insertar</i>',
                        titleAttr: 'Insertar',
                        className: 'btn btn-dark',
                        action: function(){
                            NuevoModal();
                        },
                        counter: 1
                    }
                ],
                "ajax":{
                    "type":"POST",
                    "url":"lista_personas.php",
                    "dataSrc":"",
                    "data":""
                },
                "columns":[
                    {
                        "data":"id"
                    },
                    {
                        "data":"nombre"
                    },
                    {
                        "data":"apPaterno"
                    },
                    {
                        "data":"apMaterno"
                    },
                    {
                        "data":"sexo"
                    },
                    {
                        "data":"curp"
                    },
                    {
                        "data":"fecha"
                    },
                    {
                        "data":"opciones"
                    }
                ]
            });
        }
        function NuevoModal(){
            $("#modalNuevo").modal("show");
            $("#modalNuevo").modal("toggle");
            $("#nombre").val("");
            $("#ap_paterno").val("");
            $("#ap_materno").val("");
            $("#sexo").val("");
            $("#curp").val("");
        }

        function eliminar(id){
            const swalWithBootstrapButtons = Swal.mixin({
                            customClass:{
                                confirmButton: "btn btn-success",
                                cancelButton: "btn btn-danger"
                            },
                            buttonsStyling: false
                        });
                        swalWithBootstrapButtons.fire({
                            title: "¿Estas seguro de eliminar este registro?",
                            text: "No podras revertir esto!!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Eliminar",
                            cancelButtonText: "Cancelar",
                            reverseButtons: true
                        }).then((result) => {
                            if(result.isConfirmed){
                                swalWithBootstrapButtons.fire({
                                    title: "Eliminado!",
                                    text: "El registro a sido eliminado.",
                                    icon: "success"
                                });
                                $.ajax({
                                    url: "eliminarpersonas.php",
                                    type: "POST",
                                    data: {
                                        id: id
                                    },
                                    success: function(response){
                                        if(response=="ok"){
                                            var table = $("#lista_personas").dataTable().api();
                                            $('#lista_personas').DataTable().ajax.reload();
                                            // table.ajax().reload();
                                            // $('#lista_personas').DataTable().ajax.reload();
                                        }
                                    }
                                })
                            }else if(result.dismiss === Swal.DismissReason.cancel){
                                swalWithBootstrapButtons.fire({
                                    title: "Cancelado",
                                    text: "El registro se mantiene a salvo",
                                    icon: "error"
                                });
                            }
                        });
            
        }
    </script>
</body>
</html>
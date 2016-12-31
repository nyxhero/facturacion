$(document).ready(function(){
    $.extend( true, $.fn.dataTable.defaults, {
        oLanguage : {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "_START_-_END_ de _TOTAL_",
            "sInfoEmpty":      "0",
            "sInfoFiltered":   "(total _MAX_)",
            "sInfoPostFix":    "",
            "sSearch":         "",
            "sSearchPlaceholder": "Buscar",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "<span class='glyphicon glyphicon-step-backward'></span>",
                "sLast":     "<span class='glyphicon glyphicon-step-forward'></span>",
                "sNext":     "<span class='glyphicon glyphicon-forward'></span>",
                "sPrevious": "<span class='glyphicon glyphicon-backward'></span>"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "select": {
                "rows": {
                    _: "%d seleccionados",
                    0: "",
                    1: ""
                }
            }
        }
    });
});
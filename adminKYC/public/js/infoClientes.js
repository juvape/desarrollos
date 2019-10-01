
 $(document).ready(function() {
      $('#tablaClientes').dataTable( {
          "language": idiomaIngles
      } );
  } );
 var idiomaEspañol = {
"sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              },
              "buttons": {
                  "copy": "Copiar",
                  "colvis": "Visibilidad"
              }
}

var idiomaIngles = {
    "sProcessing":     "Processing...",
    "sLengthMenu":     "Show _MENU_ records",
    "sZeroRecords":    "Not found results",
    "sEmptyTable":     "No data available in this table =(",
    "sInfo":           "Showing _START_ to _END_ of _TOTAL_ records",
    "sInfoEmpty":      "Showing  0 to 0 of 0 records",
    "sInfoFiltered":   "(Filtering of a total of _MAX_ records)",
    "sInfoPostFix":    "",
    "sSearch":         "Search:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Loading...",
    "oPaginate": {
       "sFirst":    "First",
       "sLast":     "Last",
       "sNext":     "Next",
       "sPrevious": "Previous"
    },
    "oAria": {
       "sSortAscending":  ": Activate to sort the column in ascending order",
       "sSortDescending": ": Activate to sort the column in descending order"
    },
    "buttons": {
       "copy": "Copy",
       "colvis": "Visibility"
    }
}

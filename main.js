//Código para Datables

//$('#example').DataTable(); //Para inicializar datatables de la manera más simple

$(document).ready(function() {    
    tablaUsuario = $('#tablaUsuario').DataTable({
    //para cambiar el lenguaje a español
        "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
        }],
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "Não se encontraram resultados",
                "info": "Mostrando registros do _START_ ao _END_ de um total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros do 0 ao 0 de um total de 0 registros",
                "infoFiltered": "(filtrado de um total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sLast":"Último",
                    "sNext":"Seguinte",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Processando...",
            }
    });     
});
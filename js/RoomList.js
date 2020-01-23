$(document).ready(function() {
	$('#table').DataTable({
        "language": {
            "lengthMenu": "Desplegar _MENU_ por pagina",
            "zeroRecords": "No hay registros",
            "info": "En la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
        }
    } );
} );

function eraseRoom(room){
	confirmDanger('Alerta', 'Seguro de querer borrar '+room+'?');
}

function eraseRoom(room){
	var roomToErase = {
		name:room
	}

	var btns = {
				confirmar: {
					text: 'Confirmar',
					btnClass: 'btn-danger',
					keys: ['enter'],
					action:function(){
						sendToServer(roomToErase, 'Room', 'eraseRoom');
					}
				},
				cancelar: {
					text: 'Cancelar',
					btnClass: 'btn-primary',
					keys: ['shift']
				}
			}

	confirmDanger('Alerta', 'Seguro de querer borrar '+room+'?', btns);
}

function updateRoom(room){
	var updateRoom = {
		name:room
	}

	getFromServer(updateRoom, 'Room', 'getNodesByRoom').then(
		function(data){
			var obj = JSON.parse(data);
			console.log(obj);
		}, function(e){
			alertDanger('Error',e);
	});
}

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

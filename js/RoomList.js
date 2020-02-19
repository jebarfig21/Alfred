
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
			showNodes(obj, room);
		}, function(e){
			alertDanger('Error',e);
	});
}

function showNodes(obj, roomName){
	var html = '';
	var inputID = [];

	for(var node in obj){
		var nodeData = obj[node];
		inputID.push(nodeData.nodo_id);
		html += '<div class="input-group">'+
		                '<span class="input-group-addon fa fa-book" id="nodeLabel"></span>'+
		                '<input type="text" class="form-control" placeholder="Alias" aria-describedby="nodeLabel" id="'+nodeData.nodo_id+'" value="'+nodeData.Alias+'">'+
		            '</div><br>';
	}

	var newValues = [];
	var updateData = {
		name: roomName,
		id:[],
		values:[]
	}

	var btn = {
		cancel:{
			text:"Cancelar"
		},
		update:{
			text: 'Guardar',
			btnClass: 'btn-success',
			action: function(){
				inputID.forEach(function(currentValue){
					var value = $('#'+currentValue).val();
					if (value === '') {
						alertWarning('Cuidado','Favor de no dejar campos vacios');
						return false;
					}else{
						newValues.push(value);
					}
				});

				updateData = {
					name: roomName,
					id:inputID,
					values:newValues
				}
				sendToServer(updateData, 'Room', 'updateRoom');
			}
		}
	}


	modalUpdate("Modificar "+roomName, html, btn);
}

function reviewRoom(room){
	loadNewView(room,'Room', 'reviewRoom')
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

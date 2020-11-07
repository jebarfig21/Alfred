function eraseNode(node_id, alias){
	var nodeToErase = {
		id:node_id
	}

	var btns = {
				confirmar: {
					text: 'Confirmar',
					btnClass: 'btn-danger',
					keys: ['enter'],
					action:function(){
						sendToServer(nodeToErase, 'Nodo', 'eraseNode');
					}
				},
				cancelar: {
					text: 'Cancelar',
					btnClass: 'btn-primary',
					keys: ['shift']
				}
			}

	confirmDanger('Alerta', 'Seguro de querer borrar '+alias+'?', btns);
}

function updateNode(node_id, alias,rooms){
	var html = '';
	var inputID = [];
	rooms = jQuery.parseJSON(rooms);

	html += '<div class="input-group">'+
                                '<span class="input-group-text">Alias</span>'+
		                '<input type="text" class="form-control" placeholder="Alias" aria-describedby="nodeLabel" id="'+node_id+'" value="'+alias+'">'+
		 '</div><br>'+
		 '<div class="input-group">'+
  				'<div class="input-group-prepend">'+
    					'<label class="input-group-text" for="selectRoom">Cuarto</label>'+
  				'</div>'+
		               		'<select class="custom-select" id="selectRoom">'+
    			       			'<option selected>Choose...</option>';

						for (var i = 0; i < rooms.length; i++) {
            						html+='<option value='+rooms[i].Room +'>'+rooms[i].Room+'</option>';
        					}

  			       	html+='</select>'+
		 '</div><br>';


	var newValues = [];
	var updateData = {
		id:0,
		value: 0,
		room:"DefaulRoom"
	}

	var btn = {
		cancel:{
			text:"Cancelar"
		},
		update:{
			text: 'Guardar',
			btnClass: 'btn-success',
			action: function(){
				var newAlias = $("#"+node_id).val();
				if (newAlias == "") {
					alertWarning("Cuidado","Favor de llenar el nuevo Alias")
				}else if (document.getElementById("selectRoom").selectedIndex==0){
					updateData = {
                                                id:node_id,
                                                value:newAlias
                                        }
					sendToServer(updateData, 'Nodo', 'updateNode')

				}else{
					updateData = {
						id:node_id,
						value:newAlias,
						room:document.getElementById("selectRoom").value
					}
					console.log(updateData);
					sendToServer(updateData, 'Nodo', 'updateNode');
				}
			}
		}
	}
	modalUpdate("Modificar "+alias, html, btn);
}

function reviewNode(node_id, alias){
	var node = {
		id:node_id
	}
	modalView(node, 'Nodo', 'reviewNode', alias);
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

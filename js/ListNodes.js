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
	html += '<div class="input-group ">'+
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
	      '<input id="inputRoom" style="display:none" type="text" class="form-control" placeholder="Escribe el nuevo cuarto" aria-describedby="nodeLabel" id="nodeName">'+
 		'</div><br>'+
		'<div>'+
			                        '<label for="myCheck" class="text-muted">Crear un cuarto nuevo  &nbsp;</label>' +
                                                '<input type="checkbox" id="myCheck" onclick="swtichAgregaSelecciona()">'+
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
				console.log($("#inputRoom").val());
				console.log(isSelectShowed());
				if (newAlias == "") {
					alertWarning("Cuidado","Favor de llenar el nuevo Alias")
				//Tomamos valores del select
				}else if(isSelectShowed()){
					if (document.getElementById("selectRoom").selectedIndex==0){
						console.log(document.getElementById("selectRoom").selectedIndex);
						console.log($("#inputRoom").val());	console.log("Hola Perritos");
						updateData = {
                                                	id:node_id,
                                                	value:newAlias
                                        	}

					}else{
						updateData = {
							id:node_id,
							value:newAlias,
							room:document.getElementById("selectRoom").value
						}
					sendToServer(updateData, 'Nodo', 'updateNode');
					}
				}else if(!isSelectShowed()){
					if ($("#inputRoom").val()==""){
						updateData = {
                                                	id:node_id,
                                                	value:newAlias
                                        	}
					}else{
						updateData = {
							id:node_id,
							value:newAlias,
							room:$("#inputRoom").val()
					}
				}
				console.log(updateData);
				sendToServer(updateData, 'Nodo', 'updateNode');
				}
			}
		}
	}

	modalUpdate("Modificar "+alias, html, btn);
}

function swtichAgregaSelecciona() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("inputRoom");
        var selectRoom = document.getElementById("selectRoom");
        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
                inputRoom.style.display = "block";
                selectRoom.style.display = "none"
                 } 
     else {
                inputRoom.style.display = "none";
                selectRoom.style.display = "block"
         }
}

//True si select rooms esta mostrandose
function isSelectShowed() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Si el select esta oculto y el input visible
        if (checkBox.checked == true){
		return false;
                 }
	return true;
}



function reviewNode(node_id, alias){
	var node = {
		id:node_id
	}
	modalView(node, 'Medicion', 'reviewNode', alias);
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

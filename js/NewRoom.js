var newNodes = [];
var tableContent = [];

function addNode(){
	var nodeName = $('#nodeName').val();
	if(nodeName == ''){
		alertWarning('Favor de agregar el alias del nodo');
	}else if(tableContent.includes(nodeName)){
		alertWarning('Ese nodo ya existe');
	}else{
		tableContent ='<tr><td align = "center">'+nodeName+'</td></tr>';
		$('#nodesList').append(tableContent);
		newNodes.push(nodeName);
	}
}

function saveRoom(){
	var roomName = $('#roomName').val();

	if (roomName == '' || newNodes.length == 0) {
		alertWarning('Cuidado','Datos incompletos');
	}else{
		var newRoom = {
			name: roomName,
			nodes: newNodes
		}

		sendToServer(newRoom,'Room','saveRoom');
	}

}

$( document ).ready(function() {
	$('#openModal').click(function(){
		$('#nodeName').val('');
	})

	$('#addNode').click(function(){
		addNode();
	})

	$('#saveRoom').click(function(){
		saveRoom();
	})
});
var newNodes = [];

function addNode(){
	var nodeName = $('#nodeName').val();
	var tableContent;
	if(nodeName == ''){
		alertWarning('Favor de agregar el alias del nodo');
	}else{
		tableContent ='<tr><td align = "center">'+nodeName+'</td></tr>';
		$('#nodesList').append(tableContent);
		newNodes.push(nodeName);
	}
}

function saveRoom(){
	var roomName = $('#roomName').val();

	if (roomName == '' || newNodes.length == 0) {
		alertWarning('Datos incompletos');
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
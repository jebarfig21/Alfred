var newNodes = [];
var tableContent = [];

function addNode(){
	var nodeName = $('#nodeName').val();
	if(nodeName == ''){
		alertWarning('Cuidado','Favor de agregar el alias del nodo');
	}else if(tableContent.includes(nodeName)){
		alertWarning('Cuidado','Ese nodo ya existe');
	}else{
		tableContent ='<tr><td align = "center">'+nodeName+'</td></tr>';
		$('#nodesList').append(tableContent);
		newNodes.push(nodeName);
	}
}

function loadNodes(){
	var room = $("#comboRoom").val();
	var updateRoom = {
		name:room
	}
	getFromServer(updateRoom, 'Room', 'getNodesByRoom').then(
		function(data){
			var obj = JSON.parse(data);
			var htmlString = "";
			
			for(var node in obj){
				var nodeData = obj[node];
				htmlString += '<tr><td align = "center">'+nodeData.Alias+'</td></tr>';
			}

			$("#nodesList").html(htmlString);
		}, function(e){
			alertDanger('Error',e);
	});
}

function saveRoom(){
	var roomName = $('#comboRoom').val();

	if (roomName == '' || newNodes.length == 0) {
		alertWarning('Cuidado','Datos incompletos');
	}else{
		var newRoom = {
			name: roomName,
			nodes: newNodes
		}

		sendToServer(newRoom,'Room','appendToRoom');
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
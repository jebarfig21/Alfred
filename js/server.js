function sendToServer(jsobject, controller, action) {
	var json = JSON.stringify(jsobject);
	var actionUrl = 'index.php?controller='+controller+'&action='+action;

	$.ajax({
		type: "POST",
        url: actionUrl,
        data: {Data:json},
        success: function(data){
        	alertSuccess('Exito',data,true);
        },
        error: function(e){
            alertDanger('Error DB',e.responseText);
        }
	})
}

function getFromServer(jsobject, controller,action){
    var json = JSON.stringify(jsobject);
    var actionUrl = 'index.php?controller='+controller+'&action='+action;

    return $.ajax({
        type: "POST",
        url: actionUrl,
        data: {Data:json},
    })
}
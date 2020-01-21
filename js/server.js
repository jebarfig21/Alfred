function sendToServer(jsobject, controller, action) {
	var json = JSON.stringify(jsobject);
	var actionUrl = 'index.php?controller='+controller+'&action='+action;

	$.ajax({
		type: "POST",
        url: actionUrl,
        data: {Data:json},
        success: function(data){
        	alertSuccess(data);
        },
        error: function(e){
            alertDanger(e.responseText);
        }
	})
}
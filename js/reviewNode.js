var dateFrom = $(".DTfrom");
var dateTo = $(".DTto");
var node_id={"id":2895};

function sendDate(){
	console.log("entrando a sendDate");
	if(dateFrom.val=="" && dateTo.val=="" ){
		//Cuando ambos cambien y sean cadenas vacias
		return 0;
	};
	if(dateFrom.val=="" && dateTo.val!="" ){
	//Cuando dateFrom sea vacia
		return 0;
	};
	if(dateFrom.val!=""){
		//Cuando dateTo sea vacia
		console.log("Cuando dateTo sea vacia");
		getFromServer(node_id,'Nodo','getValuesFromDate');

	};

	if(dateFrom.val!="" && dateTo.val!="" ){
	//Cuando ninguna sea vacia
	return 0 ;
	};

}

$(document).on("change", dateFrom, function(){sendDate()});
$(document).on("change", dateTo, function(){console.log(dateTo.val())});


console.log("hola desde el princpio de reviewNodo");

var dateFrom = $(".DTfrom");
var dateTo = $(".DTto");
function sendDate(){

    console.log("----------");
    console.log(getFromServer(data,'Nodo','getValuesFromDate'));
    console.log("----------");

	console.log("entrando a sendDate");
	if(dateFrom.val=="" && dateTo.val=="" ){
		//Cuando ambos cambien y sean cadenas vacias
	    console.log("Cuando ambas sea vacia");

		return 0;
	};
	if(dateFrom.val=="" && dateTo.val!="" ){
	//Cuando dateFrom sea vacia
	    console.log("Cuando dateFrom sea vacia");
		return 0;
	};
	if(dateFrom.val!=""){
		//Cuando dateTo sea vacia
		console.log("Cuando dateTo sea vacia");
		 var data = {
		         "dateFrom" : dateFrom.val(),
		                 "dateTo" : dateTo.val(),
		                         "tipo" : "humedad",
		                                 "node_id":55 
		                                     }
		                                     
		getFromServer(data,'Nodo','getValuesFromDate');

	};

	if(dateFrom.val!="" && dateTo.val!="" ){
	//Cuando ninguna sea vacia
	return 0 ;
	};

	var data = {
        "dateFrom" : dateFrom.val(),
        "dateTo" : dateTo.val(),
        "tipo" : "humedad",
        "node_id":55 
    }

}

$(document).on("change", dateFrom, function(){sendDate()});
$(document).on("change", dateTo, function(){sendDate()});


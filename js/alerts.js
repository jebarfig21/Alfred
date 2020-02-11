function alertDanger(title, content) {
	$.alert({
		icon: 'fa fa-warning',
		title: title,
		content: content,
		type: 'red',
		typeAnimated: true
	});
}

function alertWarning(title, content) {
	$.alert({
		icon: 'fa fa-warning',
		title: title,
		content: content,
		type: 'orange',
		typeAnimated: true
	});
}

function alertSuccess(title, content, reload){
	$.alert({
		icon: 'fa fa-check-circle',
		title: title,
		content: content,
		type: 'green',
		typeAnimated: true,
		buttons:{
			okay:function(){
				if(reload){
					location.reload();
				}	
			}
		}
	});
}

function confirmDanger(title, content,btns){
	$.confirm({
		icon: 'fa fa-warning',
		title: title,
		content: content,
		type: 'red',
		typeAnimated: true,
		buttons: btns
	});
}

function modalUpdate(title,content,btns){
	$.alert({
		icon: 'fa fa-check-circle',
		title: title,
		content: content,
		type: 'blue',
		typeAnimated: true,
		columnClass: 'col-md-8',
		buttons:btns
	});
}

function alertView(title, content) {
	$.alert({
		icon: 'fa fa-check-circle',
		columnClass:'col-md-8',
		title: title,
		content: content,
		type: 'blue',
		typeAnimated: true
	});
}
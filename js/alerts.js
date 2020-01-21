function alertDanger(content) {
	$.alert({
		icon: 'fa fa-warning',
		title: 'Cuidado',
		content: content,
		type: 'red',
		typeAnimated: true
	});
}

function alertWarning(content) {
	$.alert({
		icon: 'fa fa-warning',
		title: 'Cuidado',
		content: content,
		type: 'orange',
		typeAnimated: true
	});
}

function alertSuccess(content){
	$.alert({
		icon: 'fa fa-warning',
		title: 'Aviso',
		content: content,
		type: 'green',
		typeAnimated: true
	});
}
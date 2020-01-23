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

function alertSuccess(title, content){
	$.alert({
		icon: 'fa fa-check-circle',
		title: title,
		content: content,
		type: 'green',
		typeAnimated: true
	});
}

function confirmDanger(title, content){
	$.confirm({
		icon: 'fa fa-warning',
		title: title,
		content: content,
		type: 'red',
		typeAnimated: true,
		buttons: {
				confirmar: {
					text: 'Confirmar',
					btnClass: 'btn-danger',
					keys: ['enter', 'shift'],
					action: function(){
						return true;
					}
				},
				cancelar: {
					text: 'Cancelar',
					btnClass: 'btn-primary',
					keys: ['enter', 'shift'],
					action: function(){
						return true;
						}
				}
			}
	});
}
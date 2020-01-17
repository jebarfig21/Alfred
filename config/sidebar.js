var sidebar = {
	welcome:{
		title: '¿Qué quieres hacer?',

		dropdowns:{
			settings:{
				title: 'Ajustes',
				icon: 'fa fa-gears',
				content:{
					General:{
						title: 'Generales',
						icon: 'fa fa-gear',
						controller: 'Settings',
						action: 'index'
					}
				}
			},

			Nodes:{
				title: 'Tus nodos',
				icon: 'fa fa-refresh',
				content: {
					List: {
						title: 'Lista',
						icon: 'fa fa-address-book',
						controller: 'Nodo',
						action: 'index'
					},
					Create: {
						title: 'Nuevo',
						icon: 'fa fa-plus',
						controller: 'Nodo',
						action: 'Create'
					}
				}
			}
		},

		single:{
			privacy:{
				title: 'Aviso',
				icon: 'fa fa-address-card',
				controller: 'Privacy',
				action: 'index'
			}
		}
	}
}
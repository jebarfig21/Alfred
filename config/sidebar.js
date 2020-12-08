var sidebar = {
	welcome:{
		title: '¿Qué quieres hacer?',

		dropdowns:{
			rooms:{
				title: 'Tus Cuartos',
				icon: '	fa fa-hotel',
				content:{
					List: {
						title: 'Lista',
						icon: 'fa fa-address-book',
						controller: 'Room',
						action: 'listAllRooms'
					},
					Create: {
						title: 'Nuevo',
						icon: 'fa fa-plus',
						controller: 'Room',
						action: 'newRoom'
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
						action: 'listAllNodes'
					},
					Create: {
						title: 'Nuevo',
						icon: 'fa fa-plus',
						controller: 'Nodo',
						action: 'newNode'
					}
				}
			},

			Program:{
				title: 'Rutinas',
				icon: '	fa fa-clock-o',
				content: {
					List: {
						title: 'Lista',
						icon: 'fa fa-address-book',
						controller: 'Program',
						action: 'index'
					},
					Create: {
						title: 'Nuevo',
						icon: 'fa fa-plus',
						controller: 'Program',
						action: 'Create'
					}
				}
			},

			values:{
				title: 'Sensores',
				icon: 'fa fa-child',
				content: {
					Temp: {
						title: 'Temperatura',
						icon: 'fa fa-address-book',
						controller: 'Program',
						action: 'index'
					},
					Humedad: {
						title: 'Humedad',
						icon: 'fa fa-plus',
						controller: 'Program',
						action: 'Create'
					},
					Light: {
						title: 'Luminosidad',
						icon: 'fa fa-plus',
						controller: 'Program',
						action: 'Create'
					},
					Movement: {
						title: 'Movimiento',
						icon: 'fa fa-plus',
						controller: 'Program',
						action: 'Create'
					}
				}
			}
		},

		single:{
			Settings:{
				title: 'Ajustes',
				icon: 'fa fa-gears',
				controller: 'Privacy',
				action: 'index'
			},

			Help:{
				title: 'Ayuda',
				icon: 'fa fa-question-circle',
				controller: 'Privacy',
				action: 'index'
			}
		}
	}
}

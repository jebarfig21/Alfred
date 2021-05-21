//EN ESTE ARCHIVO SE CONFIGURA EL MENÚ LATERAL O DE HAMBURGUESA, AQUI PODRAS CAMBIAR EL CONTROLADOR AL QUE LLAMAN, EL ICONO, AGREGAR O ELIMINAR ELEMENTOS
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
						controller: 'Sensores',
						action: 'getTemperatura'
					},
					Humedad: {
						title: 'Humedad',
						icon: 'fa fa-plus',
						controller: 'Sensores',
						action: 'getHumedad'
					},
					Light: {
						title: 'Luminosidad',
						icon: 'fa fa-plus',
						controller: 'Sensores',
						action: 'getLuminosidad'
					},
					Movement: {
						title: 'Presencia',
						icon: 'fa fa-plus',
						controller: 'Sensores',
						action: 'getPresencia'
					}
				}
			}
		},

		single:{
			Settings:{
				title: 'Ajustes',
				icon: 'fa fa-gears',
				controller: 'User',
				action: 'settings'
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

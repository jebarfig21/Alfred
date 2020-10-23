<?php
	 
	class BaseModel extends Base{
		/**
		*Clase que propone una base para las clases del modelo, son funciones que unicamente van a usar los componentes 
		* del modelo, como constructor necesita una tabla($table) dentro de nuestra base de datos(Alfred), opcionalmente 
		* se le puede pasar como parametro una conxiń existente a una base de datos.
		*@author Alfonso Vega, Jesus Barajas
                *@version 0.1.1
                *@category core
		*/
		private $table;

		public function __construct($table, $db=NULL){
			/**
			*Funcion constructor para la clase BaseModel 
			*@param String | $table | El nombre de una tabla dentro de la bade de datos
			*@param String/Conecction | $db | Null por defecto, se debe de pasar como parametro una conexión activa a la base de datos
			*/
			$this->table = (string)$table;
			if(is_null($db)){
				parent::__construct($table);
			}else{
				parent::__construct($table,$db);
			}
		}


		public function executeSql($query){
			/**
			*Funcion que ejecuta el query que se le pase como parametro
			*@param String | $query | query que se quiere ejecutar en la base de datos Alfred
			*@return Array String | Un arreglo de String, donde cada elemento va a ser un registro de la consulta realizada
			*/
			$query = $this->db->query($query);

			if($query){
				if ($query->num_rows > 0) {
					while ($row = $query->fetch_object()) {
						$resultSet[] = $row;
					}
				}
			}

			return $resultSet;
		}

	}

?>

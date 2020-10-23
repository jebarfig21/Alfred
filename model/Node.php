<?php

class Node extends BaseModel {
/**
Clase de modelo para el manejo del Nodo

Los objetos de esta clase son de tipo Nodo, sus atributos van a ser un identificador, una habitación y un alias o nombre;
Esta clase es usada para hacer consultad directamente de la base de datos donde la tabla prinicipal va a ser nodes, el constructor
por defecto hereda el constructor de "BaseModel", que a su vez hereda el contructor "Base", para ver una varidad de metodos que 
esta clase puede usar debera cosnultar tambien la documentación de estas dos clases.

@author Jesus Barajas, Alfonso Vega
@category  Modelo
@version 0.1.1

**/

	private $nodo_id, $room, $alias;

	public function __construct(){
		 /**
		* Metodo contructor, no recibe parametros, utiliza el constructor de BaseModel
		*/

		$table = "nodes";
		parent::__construct($table);
	}

	public function getId(){
		return $this->nodo_id;
	}

	public function getRoom(){
		return $this->room;
	}

	public function getAlias(){
		return $this->alias;
	}

	public function setRoom($room){
		$this->room = $room;
	}

	public function setAlias($alias){
		$this->alias = $alias;
	}

	public function save(){
		 /**
		* Guarda un nuevo elemento en la tabla nodes, tomando en cuenta los valores room y alias, de este objeto para
		* crear el registro
		*
		* @return boolean 
		* True, si se inserto correctamente el registro en la base de datos
		* False, si no se logró completar correctamente el query
		*/

		$query = "INSERT INTO `nodes`(`Room`, `Alias`) VALUES ('"
		.$this->room."','"
		.$this->alias."')";

		$save = $this->db()->query($query);

		return $save;
	}

	public function getRooms(){
		 /**
		* Este método  sirve para obtener una lista con todos los cuartos que tenemos registrados en nuestra tabla nodes,
		*
		* @return Array
		* Un arreglo de String donde cada elemento pertenece a un cuarto diferente
		*/
		$query = $this->db()->query("SELECT DISTINCT Room FROM nodes");
		$resultSet = [];

		while($row = $query->fetch_object()){
			$resultSet[] = $row;
		}

		return $resultSet;

	}
}

?>

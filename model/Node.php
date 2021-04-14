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
	const TABLE = 'nodes';

	public function __construct(){
		 /**
		* Metodo contructor, no recibe parametros, utiliza el constructor de BaseModel
		*/
		parent::__construct(self::TABLE);
	}


	public function __get($name){
		return $this->$name;
	}
	public function __set($name,$value){
		$this->$name = $value;
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

		$save = $this->db->query($query);

		return $save;
	}

	public function getRooms(){
		 /**
		* Este método  sirve para obtener una lista con todos los cuartos que tenemos registrados en nuestra tabla nodes,
		*
		* @return Array
		* Un arreglo de String donde cada elemento pertenece a un cuarto diferente
		*/
		$query = $this->db->query("SELECT DISTINCT Room FROM nodes");
		$resultSet = [];

		while($row = $query->fetch_object()){
			$resultSet[] = $row;
		}

		return $resultSet;

	}

	public function getLastMedition($id_node, $tipoMedicion){
		$query = $this->db->query("SELECT * FROM mediciones WHERE nodo_id = ".$id_node." AND tipo = '$tipoMedicion' ORDER BY `date` DESC LIMIT 1");
		return $query->fetch_object();

	}

	public function getValuesByDates($id_node, $tipoMedicion, $from, $to){
		$query = $this->db->query("SELECT * FROM mediciones WHERE nodo_id=".$id_node." AND tipo = '$tipoMedicion' AND  date BETWEEN '$from' AND '$to'");
		return $query->fetch_object();
	}




}

?>

<?php

class Medicion extends BaseModel {
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

	private $nodo_id, $medicion_id, $tipo,$value, $date;
	const TABLE = 'mediciones';

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

        public function getLastValueByNode($id_node,$tipo) {
			/**
                        *Funcion para obtener el valor de value mas reciente de la tabla $this->value, de un nodo determinado, esta 
			*función nos sirve para obtener el valor mas reciente de cada sensor de cada nodo
			*@param int-String | $id_node | es el id dentificador del nodo que queremos consultar
                        *@return String | regresa un string con el ultimo valor de un nodo de nuestra $this->table
                        */
			$query = $this->db->query("SELECT * FROM $this->table WHERE nodo_id = ".$id_node." AND tipo = '$tipo' ORDER BY `date` DESC LIMIT 1");
			//var_dump("SELECT * FROM $this->table WHERE nodo_id = ".$id_node." AND tipo = '$tipo' ORDER BY `date` DESC LIMIT 1");die();
			//var_dump($query);die();
			$resultSet = [];
                        while($row = $query->fetch_object()){
                                $resultSet[] = $row;
                        }
                        return $resultSet[0]->value;
                }

}

?>

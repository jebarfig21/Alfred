<?php

class Medicion extends BaseModel {
/**
Clase de modelo para el manejo de Mediciones, en particular en este proyecto solo queremos leer mediciones, no podemos ni eliminar,
ni crear, ni alterar las mediciones

@author Jesus Barajas
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

        public function getLastValueByNode($id_node,$tipo) {
			/**
                        *Funcion para obtener el valor de value mas reciente de la tabla $this->value, de un nodo determinado, esta 
			*función nos sirve para obtener el valor mas reciente de cada sensor de cada nodo
			*@param int-String | $id_node | es el id dentificador del nodo que queremos consultar
                        *@return String | regresa un string con el ultimo valor de un nodo de nuestra $this->table
                        */
			$query = $this->db->query("SELECT * FROM $this->table WHERE nodo_id = ".$id_node." AND tipo = '$tipo' ORDER BY `date` DESC LIMIT 1");
                        return $query->fetch_object()->value;
                }

}

?>

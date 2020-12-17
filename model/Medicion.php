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


 	public function getValueByTipo($id,$tipo){
                        /**
                        *Funcion para obtener todos los registros de $this->table  para un determinado valor en alguna de las columnas$
                        *@param String | $column | El nombre de la columna en nuestra tabla(this->table) en la base de datos(Alfred)
                        *@param String | $value | El valor que queremos que tengan los registros en $column
                        *@return Array String | regresa un arreglo donde cada elemento es una fila de la tabla, donde  $column == $val$
                        */
                        $query = $this->db->query("SELECT * FROM $this->table WHERE tipo = '$tipo' AND nodo_id = $id");
                        $resultSet = [];
                        while ($row = $query->fetch_object()) {
                                $resultSet[] = $row;
                        }
			return $resultSet;
                }



}

?>

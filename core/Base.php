<?php

	class Base {
		/**
		*Código que sirve de "plantilla" o bien base, para los objetos del modelo
		*
		*En esta clase vamos a definir funciones que nos van a servir para todos los elementos del modelos, sobre todo 
		*consultas generales (CRUD), donde mediante los parametros vamos a poder personalizar el query, la ventaja de esta
		*estructura de cores, es que podemos reutilizar bastante código de uso básico
		*
		*@author Alfonso Vega, Jesus Barajas
		*@version 0.1.1
		*@category core
		*/

		private $table, $db, $connect;

		public function __construct($table,$db = NULL) {
			/**
                	*Método constructor de  clase
			*@param String | $table | Variable de tipo String, es elnombre de una tabla en la base de datos
                	*@param Connect | $db | Variable de tipo connect (vease Alfred/core/DBConnect.php), la cual es una conexión a una base de datos
                	*/
			$this->table = (string) $table;
                        if(is_null($db)){
				require_once 'ConnectDB.php';
                        	$this->connect = new Connect();
                        	$this->db = $this->connect->connection(); /*Creando una conexión a la base de datos*/
			}else{
				$this->db=$db;
                        }

		}

		public function getConnection(){
			return $this->connect;
		}

		public function db() {
			return $this->db;
		}
		public function closeConnection(){
			return $this->db->close();
		}

		public function getAll() {
			/**
                        *Funcion para obtener todos los registros(completos) de todos los nodos, de $this->table en la base de datos a la que estamos conectados(Alfred)
                        *@return String Array | regresa un arreglo de string donde cada elemento del array va a ser un registro de la tabla
                        */

			$query = $this->db->query("SELECT * FROM $this->table");
			$resultSet = [];
			while($row = $query->fetch_object()){
				$resultSet[] = $row;
			}
			return $resultSet;
		}

                 public function getLastValueByNode($id_node) {
			/**
                        *Funcion para obtener el valor de value mas reciente de la tabla $this->value, de un nodo determinado, esta 
			*función nos sirve para obtener el valor mas reciente de cada sensor de cada nodo
			*@param int-String | $id_node | es el id dentificador del nodo que queremos consultar
                        *@return String | regresa un string con el ultimo valor de un nodo de nuestra $this->table
                        */

			$query = $this->db->query("SELECT * FROM $this->table WHERE nodo_id = ".$id_node." ORDER BY `date` DESC LIMIT 1");
                        $resultSet = [];
                        while($row = $query->fetch_object()){
                                $resultSet[] = $row;
                        }
                        return $resultSet[0]->value;
                }


		public function getById($id) {
			/**
                        *Funcion para obtener todos los registros de $this->table para el nodo que tenga un determinado identificador 
                        *@param int-String | $id | es el id dentificador del nodo que queremos consultar
                        *@return Array String | regresa un arreglo donde cada elemento es una fila de la tabla, donde  id_node == $id
                        */
			$query = $this->db->query("SELECT * FROM ".$this->table." WHERE nodo_id = ".$id);
			$resultSet = [];
			if ($row = $query->fetch_object()) {
				$resultSet = $row;
			}
			return $resultSet;
		}

		public function getBy($column, $value){
			/**
                        *Funcion para obtener todos los registros de $this->table  para un determinado valor en alguna de las columnas de nuestra tabla 
                        *@param String | $column | El nombre de la columna en nuestra tabla(this->table) en la base de datos(Alfred)
			*@param String | $value | El valor que queremos que tengan los registros en $column
                        *@return Array String | regresa un arreglo donde cada elemento es una fila de la tabla, donde  $column == $value
                        */
			$query = $this->db->query("SELECT * FROM $this->table WHERE $column = '$value'");
			$resultSet = [];
			while ($row = $query->fetch_object()) {
				$resultSet[] = $row;
			}
			return $resultSet;
		}

		public function getData($data, $column, $value){
			/**
                        *Funcion para obtener determinados valores de algunas columas registros en $this->table, hay que recalcar que
			* esta funcon realiza una query muy báscia, no acepta multiples parametros, es decir, solo podremos verificar
			* una columna, con un valor y un data
			*@param String | $data | Las columna que queremos obtener
                        *@param String | $column | El nombre de la columna en nuestra tabla(this->table) en la base de datos(Alfred)
                        *@param String | $value | El valor que queremos que tengan los registros en $column
                        *@return Array String | regresa un arreglo donde cada elemento es una fila de la tabla, donde  $column == $val$
                        */

			$query = $this->db->query("SELECT $data FROM $this->table WHERE $column = $value");
			$resultSet = [];

			while ($row = $query->fetch_object()) {
				$resultSet[] = $row;
			}

			return $resultSet;
		}

		public function deleteById($id){
			/**
			*Funcion que elimina los registros de $this->table donde el nodo tenga el identificador $id
			*@param int|String|$id|El identificador de un nodo de nuestra tabla nodes
			*@return boolean | True si el query se ejecuto correctamente | False si el query se ejecuto con errores
			*/
			$query = $this->db->query("DELETE FROM $this->table WHERE nodo_id=$id");
			return $query;
		}

		public function deleteBy($column, $value){
			/**
                        *Funcion que elimina los registros de $this->table donde  tengamos una valor en una columna especifica
                        *@param String | $column | Una columna que este en $this-table
			*@param String | $value  | El valor que deben de tener los registros en $column
                        *@return boolean | True si el query se ejecuto correctamente | False si el query se ejecuto con errores
                        */

			$query = $this->db->query("DELETE FROM $this->table WHERE $column='$value'");
			return $query;
		}

		public function update($column,$value,$filter,$filterVal){
			/**
			*Funcion que actualiza un registro correspondiente a la $this->table actual, donde $filterVal se ecuentre en 
			* algun registro de una columna $filter, se actualiza en la clumna $column, el nuevo valor sera $value
			*@param String | $column | la columa donde se va a ctualizar el valor
			*@param String | $value  | el nuevo valor, el que va a actualizar
			*@param String | $filter | la columna en la tabla para el filtro
			*@param String |$filterVal| el valor con el que debe de cumplir la columna de $filter
			*@todo Terminar de hacer la funcion iterariva para que se pueda actualizar n parametros, es decir que los 
			* parametros sean arreglos de tamaño n
			*
			*@return boolean | True si el query se ejecuto correctamente | False si el query se ejecuto con errores
			*/
                        if(count($column)==count($value)){
				for($i = 0 ; $i<count($value);$i++){
					$query=$this->db->query("UPDATE ". $this->table." SET ".$column[$i]." = '".$value[$i]."' WHERE ".$filter."=".$filterVal);

				}
				return true;
     			}
			return false;
		}
	}
?>

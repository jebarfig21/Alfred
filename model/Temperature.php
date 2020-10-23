<?php

class Temperature extends BaseModel {
/**
Clase de modelo para las medidas de humedad

Los objetos de esta clase son de tipo Temperature, sus atributos van a ser un identificador, uun valor(temperatura) y la fecha de
medición, esta clase es usada para hacer consultas directamente de la base de datos donde la tabla prinicipal va a ser
temperature_sensor el constructor por defecto hereda el constructor de "BaseModel", que a su vez hereda el contructor "Base", para
ver una varidad de metodos que esta clase puede usar debera cosnultar tambien la documentación de estas dos clases. Para esta clase
se puede pasar uno o ningún parametro, el es una conexión actual a la base de datos, esto para aprovechar los recursos que ya tenemos
generados, si no se pasa este parametro se debe verificar que se cree una conexión correcta a la base de datos


@author Jesus Barajas
@category  Modelo
@version 0.1.1

*/

	private $medicion_id, $nodo_id, $value, $date;


	public function __construct($db = NULL){
		/**
                *Método constructor de  clase
                *@param Connect | Variable de tipo connect (vease Alfred/core/DBConnect.php), la cual es una conexión a una base 
                *                 de datos
                */

                $table = "temperature_sensor";
               	if(is_null($db)){
                	parent::__construct($table);
                }else{
                        parent::__construct($table,$db);
                     }
                }

		public function getId(){
			return $this->medicion_id;
		}

		public function setId($id){
			$this->medicion_id = $id;
		}

	        public function getNodeId(){
                        return $this->nodo_id;
                }

		 public function tempValue(){
                        return $this->value;
                }

 		public function getDate(){
                        return $this->date;
                }




	}

?>

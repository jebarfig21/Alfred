<?php

class Presence extends BaseModel {
/**
Clase de modelo para las medidas de presencia

Los objetos de esta clase son de tipo Presence, sus atributos van a ser un identificador, uun valor(presencia en un lapso de tiempo)
 y la fecha de medición, esta clase es usada para hacer consultas directamente de la base de datos donde la tabla prinicipal va a ser
presence_sensor el constructor por defecto hereda el constructor de "BaseModel", que a su vez hereda el contructor "Base", para ver
una varidad de metodos que esta clase puede usar debera cosnultar tambien la documentación de estas dos clases. Para esta clase se
puede pasar uno o ningún parametro, el es una conexión actual a la base de datos, esto para aprovechar los recursos que ya tenemos
generados, si no se pasa este parametro se debe verificar que se cree una conexión correcta a la base de datos


@author Jesus Barajas
@category  Modelo
@version 0.1.1

**/

		private $nodo_id, $value, $date;

		public function __construct($db=NULL){
 		/**
                *Método constructor de  clase
                *@param Connect | Variable de tipo connect (vease Alfred/core/DBConnect.php), la cual es una conexión a una base 
                *                 de datos
                */

                        $table = "presence_sensor";
                        if(is_null($db)){
                                parent::__construct($table);
                        }else{

                                parent::__construct($table,$db);
                        }
                }

		public function getId(){
			return $this->nodo_id;
		}

		public function setId($id){
			$this->nodo_id = $id;
		}

	}

?>

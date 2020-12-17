<?php
require_once "core/BaseController.php";

	class SensoresController extends BaseController {
		//private $medicion,$nodo;

		public function __construct(){
			parent::__construct();

		}

		public function index(){

		}

		public function getSensorValue($tipo){
			/*Regresa un arreglo con los datos (Nodo,value,date,tipo)  de la ultima medición de todos los nodos */
			$nodosModel = new Node();
			$nodos = $nodosModel->getAll();
			foreach($nodos as $node){
				$medicion = $nodosModel->getLastMedition($node->nodo_id,$tipo);
				$value = $medicion->value;
				$date = $medicion->date;
				if($value == NULL){
					$value=00;
					$date = "Sin registro";
				}
				$node->value = $value;
				$node->date = $date;
				$node->tipo = $tipo;

			}
			$this->view('Sensores', array("nodos" => $nodos));

		}
		public function getHumedad(){

 			$this->getSensorValue("humedad");

		}

		public function getLuminosidad(){

			$this->getSensorValue("luminosidad");
		}

		public function getTemperatura(){

			$this->getSensorValue("temperatura");
		}

		public function getPresencia(){

			$this->getSensorValue("presencia");
		}


	}


?>

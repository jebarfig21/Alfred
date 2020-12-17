<?php
require_once "core/BaseController.php";

	class ReviewNodeController extends BaseController {
		private $medicion;
		public function __construct(){
			parent::__construct();
 			$this->medicion = new Medicion();
		}

		public function reviewNode(){
                        $data = json_decode($_POST['Data']);
                        $id = $data->{"id"};
			$tipos = array("humedad"=> NULL,"temperatura"=>  NULL,"luminosidad"=>  NULL,"presencia"=>  NULL);
			foreach($tipos as $tipo => $value){
				$allValues = $this->medicion->getValueByTipo($id,$tipo);
				$tipos[$tipo] = $allValues;
				//var_dump($tipos);die();
			}
			$this->view('reviewNodo', array("mediciones" => $tipos));

                }

	}

?>

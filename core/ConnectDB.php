<?php
	class Connect {
		/**
		*Clase para genera una conexión con la base de datos
		*@author Alfonso Vega
                *@version 0.1.1
                *@category core
		*/
		private $driver, $host, $user, $pass, $database, $charset;

		public function __construct () {
			/**
			*Funcion constructor que obtiene los datos necesarios para comenzar una conexión a la base de datos, obitene
			* la llaves del documento ../config/database.php
			*/
			$db_cfg = require_once 'config/database.php';

			$this->driver 		= $db_cfg["driver"];
			$this->host 		= $db_cfg["host"];
			$this->user 		= $db_cfg["user"];
			$this->pass 		= $db_cfg["pass"];
			$this->database 	= $db_cfg["database"];
			$this->charset 		= $db_cfg["charset"];
		}

		public function connection () {
			/**
			*Función que genera una conexión con la base de datos, regresa esta conexión.
			*@return Devuelve un objeto que representa la conexión al servidor MySQL
			*/
			if($this->driver == "mysqli" || $this->driver == null){
				$con = new mysqli($this->host, $this->user, $this->pass, $this->database);
				$con->query("SET NAMES '".$this->charset."'");
				return $con;
			}
		}
	}
?>

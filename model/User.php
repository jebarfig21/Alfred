<?php

class User extends BaseModel {
/**
Clase de modelo para el manejo del User

Los objetos de esta clase son de tipo User, sus atributos van a ser un identificador, nombre, email,password y role;
Esta clase es usada para hacer consultas directamente de la base de datos donde la tabla principal va a ser users, el constructor
por defecto hereda el constructor de "BaseModel", que a su vez hereda el contructor "Base", para ver una varidad de metodos que 
esta clase puede usar debera consultar tambien la documentación de estas dos clases.

@author Jesus Barajas
@category  Model
@version 0.1.1

**/

	private $user_id, $name, $email, $password, $role;
	const TABLE = 'users';

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

		$query = "INSERT INTO `users`(`name`, `email`,`password`,`role`) VALUES ('"
		.$this->name."','"
	    .$this->email."','"
		.$this->password."','"
		.$this->role."')";

		$save = $this->db->query($query);

		return $save;
	}

	public function getUsers(){
		 /**
		* Este método  sirve para obtener una lista con todos los usuraios que tenemos registrados,
		*
		* @return Array
		* Un arreglo de String donde cada elemento pertenece a un usuario
		*/
		$query = $this->db->query("SELECT * FROM users");
		$resultSet = [];

		while($row = $query->fetch_object()){
			$resultSet[] = $row;
		}

		return $resultSet;

	}

	public function getUserByEmail($email){
		 /**
		* Este método  sirve para obtener un usuario por su email
		*
		* @return User
		* 
		*/
		$query = $this->db->query("SELECT * FROM users WHERE email = '".$email."'");
		$resultSet = [];

		while($row = $query->fetch_object()){
			$resultSet[] = $row;
		}
		return $resultSet;
	}

	

}

?>

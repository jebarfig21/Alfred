<?php
require_once "core/BaseController.php";
require_once "model/User.php";

	class UserController extends BaseController {
		private $userObject;

		public function __construct(){
			parent::__construct();
		}

		public function index(){

            if(isset($_POST['Data'])){
                $user = json_decode($_POST['Data']);
                $email = $user->email;
                $password = hash('sha256',$user->password);
                $this->login($email,$password);
            }else{
                $this->view('Login',array());
            }


        }

		/**
		*Valid an existing user
		*/
		public function login($email,$password){
    		$userObject =new User();
    		$user = ($userObject->getUserByEmail($email))[0];
    		if($user->email==$email and $user->password==$password){
                $_SESSSION['valid']=true;
                $_SESSION['username']=$email;
                $_SESSION['id']=$user->id_user;
    		}else{
               echo("no pasaste");
    		}
		}

		/**
		*Log out
		**/
        public function logout(){
            session_destroy();
            $this->view('Login',array());
        }

		/*
        *Create new User
		*/
        public function signin(){
			if(isset($_POST['Data'])){
				$user = json_decode($_POST['Data']);
				$userEmail = $user->{"email"};
				$userPassword = $user->{"password"};
		    }
	    }

	    public function settings(){
            $this->view('Settings',array());
	    }
	    
		/**
		*Add new user view
		**/
        public function addUser(){
            $this->view('addUser',array());
        }
        
		/**
		*Add new user view
		**/
        public function addUserDB(){
            if(isset($_POST['Data'])){
                $newUser  = json_decode($_POST['Data']);
                $name    = $newUser->{"name"};
                $email    = $newUser->{"email"};
                $password = $newUser->{"password"};
                $role    = $newUser->{"rol"};
                $userObject = new User();

                $userObject->name  = $name;
                $userObject->email = $email;
                $userObject->password = hash('sha256',$password);
                $userObject->role = $role;

                if (count($userObject->getBy('email',$email)) == 0){
                    $userObject->save();
                }
                echo 'Se ha guardado correctamente';

                }else{
                    echo 'El cuarto ya existe';
                }
            }

        }
?>

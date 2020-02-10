<?php
class modelAdmin{

	public static function userAuth(){

		if(isset($_SESSION['userId'])){
			$login=true;
		
		}else{
			$login=false;
			if(isset($_POST['btnLogin'])){
				if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] !="" && !empty($_POST['password'])){
				$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
				$password=$_POST['password'];//123456
				//SELECT * FROM `users` WHERE `email`='$email'
				$sql="SELECT * FROM users WHERE email='".$email."'";
				$db=new Database();
				$item=$db->getOne($sql);
				//print_r($item);
				/*if($item=!null){
					if(password_verify($password,$item['password'])){
						print_r($item['password']);
						$_SESSION['userId']=$item['id'];
						$_SESSION['username']=$item['username'];
						$_SESSION['status']=$item['status'];				

						$_SESSION['sessionID']=session_id();

						$login=true;	
					}
		}	*/

if($item){
		//сравнить пароль
		
		if(password_verify($password, $item['password'])){
		
			//переменные сессии
			$_SESSION['userId']=$item['id'];
			$_SESSION['username']=$item['username'];
			$_SESSION['status']=$item['status'];			
			$_SESSION['sessionID']=session_id();			
			$login=true;
		
		}//controll password
	 }



	}	
	}
}
	return $login;

	}

	public static function userLogout(){
		unset($_SESSION['sesionId']);
		unset($_SESSION['userId']);
		unset($_SESSION['username']);
		unset($_SESSION['static']);
		session_destroy();
		return;
	}
}
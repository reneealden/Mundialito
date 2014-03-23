<?php session_start();

	/*if( isset($_POST['encode']) ){
 		$decode = json_decode(base64_decode($_POST["json"]));
 	}else{
 		$decode = json_decode(stripslashes($_POST["json"]));
 	}*/

 	include_once '../clases/DB.php';
	include_once '../clases/Empresa.php'; 

 	$jsonServer = json_decode(base64_decode($_POST['json']));
 	$dateNow = date("Y-m-d G:i:s");

 	if( isset( $jsonServer->mod ) != '' )
	{
		switch( $jsonServer->mod )
		{
			case "Login":
				$email = $jsonServer->cmd->email;
				$password = $jsonServer->cmd->password;	

				if( $email == 'admin' && $password == 'admin' ){
					$_SESSION['admin'] = 'admin'; 
					$response = json_encode(array('success'=>'ok'));
				}else{
					$response = json_encode(array('success'=>'error'));	
				}
				
			break;

			case 'SaveNameCompany':
				$nameEmpresa = $jsonServer->cmd->nameCompany;

				$company = new Empresa();

				$result = $company->saveNameEmpresa( $nameEmpresa, $dateNow );
				$response =json_encode(array('success'=>$result));
			break;
		}

		echo $response;
	}

 	

?>
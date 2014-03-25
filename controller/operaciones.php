<?php session_start();

	include_once '../clases/DB.php';
	include_once '../clases/Company.php'; 
	include_once '../clases/User.php'; 

 	$jsonServer = json_decode(base64_decode($_POST['json']));
 	$dateNow = date("Y-m-d G:i:s");
 	
 	if( isset( $jsonServer->mod ) != '' )
	{
		switch( $jsonServer->mod )
		{
			case "LoginAdmin":
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
				$nameCompany = $jsonServer->cmd->nameCompany;
				$nameImageCompany = $jsonServer->cmd->nameImageCompany;
				$company = new Company();

				$result = $company->saveNameEmpresa( $nameCompany, $nameImageCompany, $dateNow );
				$response =json_encode(array('success'=>$result));
			break;

			case 'deleteImage':
				$uploadDir = '';
				$nameFile = $jsonServer->cmd->nameImage;
				$flagFile = $jsonServer->cmd->flag;

				switch ($flagFile) {
					case 'C':
						# code...
						$uploadDir = '../uploadFile/uploads/docs/';
						break;
					case 'I':
						# code...
						$uploadDir = '../uploadFile/uploads/banner/';
						break;
					default:
						# code...
						$uploadDir = '';
						break;
				}
				$success = false;

				$filePath = $uploadDir.basename($nameFile);
				if( is_file($filePath) ){
					  $success = @unlink( $filePath );
			    }
			    
			    if ( $success ) {
			    	$response =json_encode(array('success'=>'El archivo fue removido correctamente', 'flag'=>'ok'));
			    }else{
			    	$response =json_encode(array('success'=>'Ocurrio un error', 'flag'=>'error'));
			    }
			break;

			case 'SaveUsersCsv':
				$nameFile = $jsonServer->cmd->nameFile;
				$company = new Company();

				$result = $company->saveCsv( $nameFile );
				$response =json_encode(array('success'=>$result));
			break;

			case 'LoginUser':
				$nameUser = $jsonServer->cmd->user;
				$password = $jsonServer->cmd->password;
				$nameUser = str_replace ( '\\\'', '\'', $nameUser );
				$password = str_replace ( '\\\'', '\'', $password );
				$user = new User();

				$result = $user->LoginUser( $nameUser, $password );
				
				if( $result['message'] == 'ok' ){
					$_SESSION['user'] = $result['nameUser']; 
				}

				$response = json_encode(array('success'=>$result));
			break;
		}

		echo $response;
	}

 	

?>
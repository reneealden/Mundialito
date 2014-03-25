<?php
include_once 'DB.php';

class User{
	private $objSendResp;

	public function __construct() {
       
    }

	public function LoginUser( $nameUser, $password ){
		$link = DB::conectar();
		$query = "SELECT * FROM tb_usuarios WHERE nameUser = '$nameUser' and password = $password";
		$result = mysql_query( $query, $link );
		if( $result ){
			$row = mysql_fetch_array($result);	
			$objSendResp = array('nameUser' => $row['nameUser'], 'message' => 'ok');
		}else{
			$objSendResp = array('message' => 'error');
		}

		return $objSendResp;
	}

	
}
?>
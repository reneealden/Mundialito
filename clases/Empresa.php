<?php
include_once 'DB.php';

class Empresa{
	private $objSendResp;

	public function __construct() {
       
    }

	public function saveNameEmpresa( $nameCompany, $dateNow ){
		$link = DB::conectar();
		$query = "INSERT INTO tb_empresa(nombreEmpresa, fechaCreacion) VALUES('$nameCompany','$dateNow')";
		
		if( mysql_query( $query,$link ) ){
			$idEmpresa = mysql_insert_id();
			$objSendResp = array('id' => $idEmpresa, 'message' => 'ok');
		}else{
			$objSendResp = array('message' => 'error');
		}

		return $objSendResp;
	}
}
?>
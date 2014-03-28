<?php
include_once 'DB.php';
include('crud/mysql_crud.php');

class Company{
	private $objSendResp;

	public function __construct() {
       
    }

	public function saveNameEmpresa( $nameCompany, $nameImage, $dateCreation ){
		$link = DB::conectar();
		$query = "INSERT INTO tb_empresa( nameCompany, bannerCompany, dateCreation ) VALUES ('$nameCompany', '$nameImage', '$dateCreation')";
		
		if( mysql_query( $query, $link ) ){
			$idCompany = mysql_insert_id();
			$objSendResp = array('id' => $idCompany, 'message' => 'ok');
		}else{
			$objSendResp = array('message' => 'error');
		}

		return $objSendResp;
	}

	public function saveCsv( $nameFile ){
		$link = DB::conectar();
		$row = 1;
		$csvFile = "../uploadFile/uploads/docs/".$nameFile;
		if (($handle = fopen($csvFile, "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        $row++;
		        for ($c=0; $c < $num; $c++) {
		        	$str = $data[$c];              		
		        	$strExplode = explode( ';', $str );
		        	$query = "INSERT INTO tb_usuarios (nameUser, password) VALUES ('$strExplode[0]','$strExplode[1]')";
		            if( mysql_query($query,$link) ){
		            	$objSendResp = array('message' => 'ok');
		            }
		        }
		    }
		    fclose($handle);
		}

		return $objSendResp;
	}

	/* CFER */
	public function LoadCompanyAll(){		
		$db = new Database();
		$db->connect();
		$db->select('empresa','id,nombrelargo,nombrecorto,email,estado',NULL,NULL,'id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
		$res = $db->getResult();
		print_r($res);

		return array('message' => 'ok');
	}	
	/* --- */
}
?>
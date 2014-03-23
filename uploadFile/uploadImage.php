<?php session_start();

function splitFilename($filename)
{
    $pos = strrpos($filename, '.');
    if ($pos === false)
    { // dot is not found in the filename
        return array($filename, ''); // no extension
    }
    else
    {
        if($pos > 20)
			$basename = substr($filename, 0, 21);
        else
			$basename = substr($filename, 0,$pos);
        
        $extension = substr($filename, $pos+1);
        return array($basename, $extension);
    }
} 

	$uploaddir = 'uploads/banner/';
	$arrFile = array();
	$uploadfile = basename($_FILES['userfile']['name']);
	$arrFile = splitFilename($uploadfile);
	//array con caracteres invalidos
	$characInval = array(" ","#","$","'","(",")","[","]","%","¡","¿","!",",",";","_","&","{","}");
	$uploadfile =  str_replace($characInval,"",$arrFile[0]."_".rand(10000, 99999).'.'.$arrFile[1]);
	$description = "file upload: ".$uploaddir.$uploadfile;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$uploadfile)) {
	echo '{"success":"true","filename":"'.$uploadfile.'","ruta":"'.$uploaddir.$uploadfile.'"}';
} else {
    echo '{"success":"false"}';
}	
?>
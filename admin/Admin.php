<?php session_start();  
 	if ( !isset( $_SESSION['admin'] )){
 		header("Location: index.php");
 	}
?>
<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Mundialito</h3>
        <ul id="navAdmin" class="nav nav-justified">
          <li class="active"><a id="First" href="#">Agregar empresas</a></li>
          <li><a id="Third" href="#">Subir usuarios</a></li>
          <li><a href="#">Configurar accesos</a></li>
          <li><a href="#">Imágenes laterales</a></li>
          <li><a href="#">Act. de resultados</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <form id="formFirst" class="form-signin">
            <h2 class="form-signin-heading">Datos de la Empresa</h2>
            <input type="text" id="txtCompany" class="form-control" placeholder="Nombre de la Empresa" autofocus>
            <br>
            <label>Banner de la Empresa</label>
            <button id="btnUploadImg" class="btn btn-primary btn-sm">Select</button>
            <div class="blockResImg"></div>
            <br>
            <input type="button" class="btn btn-primary btn-block btn-sm" id="btnSaveComp" value="Enviar">
        </form>

        <form id="formThird" class="hideForm form-signin" method="post" enctype="multipart/form-data">
            <h2>Subir Usuarios al sistema</h2>
             <input type="file" id="fileUsers">
            <br>
            <input type="button" class="btn btn-lg btn-primary btn-block" id="btnSaveComp" value="Enviar">  
        </form>
      </div>      

      <!-- Site footer -->
      <div class="footer">
        <p>© Company 2014</p>
      </div>

        <script src="../js/libs/jquery-1.7.min.js"></script>
        <script src="../js/libs/json.js"></script>
        <script src="../js/libs/base64.js"></script>
        <script src="../js/libs/jquery.tmpl.min.js"></script>
        <script src="../uploadFile/js/AjaxUpload.2.0.min.js"></script>
        <script src="../js/custom/customAdmin.js"></script>

    </div> <!-- /container -->

    <script id="archivoTemplate" type="text/html">
    <div class="menu-item">
        <a class="filename" href="${ruta}" target="_blank">${name}</a>
        <a class="remove" href="#" onClick="removeFile(this,'${name}'); return false;">Remove</a>
    </div>
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 

</body>
</html>	
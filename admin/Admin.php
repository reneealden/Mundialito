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
      <div class=""> <!-- Jumbotron muy pequeño -->
        <form id="formFirst" class="form-data">
            <h2 class="form-signin-heading">Datos de la Empresa</h2>
            <input type="text" id="txtCompany" class="form-control" placeholder="Nombre de la Empresa" autofocus>
            <br>
            <label>Banner de la Empresa</label>
            <button id="btnUploadImg" class="btn btn-primary btn-xs">Select</button>
            <div class="blockResImg hideForm"></div>
            <div class="blockError hideForm"></div>
            <br><br>
            <input type="hidden" id="inptImage">
            <input type="button" class="btn btn-primary btn-sm" id="btnSaveComp" value="Enviar">
        </form>

        <form id="formThird" class="hideForm form-data" method="post" enctype="multipart/form-data">
            <h2 class="form-signin-heading">Subir Usuarios al sistema</h2>
            <label>Listado de usuarios</label>
            <button id="btnUploadCvs" class="btn btn-primary btn-xs">Select</button>
            <div class="blockResExcel hideForm"></div>
            <div class="blockErrorExcel hideForm"></div>
            <br><br>
            <input type="hidden" id="inptExcel">
            <input type="button" class="btn btn-lg btn-primary" id="btnSaveUsers" value="Enviar">  
        </form>

        <!-- CFER -->
        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
   
                  <div class="modal-header">
                      <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
                      <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                  </div>
                  <div class="modal-body">
                      <h4>Text in a modal</h4>
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                  </div>
                  <div class="modal-footer">
                      <div class="btn-group">
                      <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      <button class="btn btn-primary">Save changes</button>
                  </div>
                  </div>
   
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dalog -->
        </div><!-- /.modal -->

        <div class="tableContainer">         
          <div class="well">            
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left"><i class="glyphicon glyphicon-th"></i> Empresas</h3>
                <div class="pull-right">                  
                  <div class="btn-group btn-group-sm" style="margin-top:-7px;">                    
                    <button type="button" class="btn btn-info clickable filter">
                      <span class="glyphicon glyphicon-search"></span> Buscar
                    </button>
                    <button type="button" id="btn-listar" class="btn btn-info" data-toggle="modal" href="#myModal">
                      <span class="glyphicon glyphicon-plus"></span> Añadir
                    </button>
                  </div>                  
                </div>
              </div>
              <div class="panel-body">
                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
              </div>
              <table class="table table-hover" id="dev-table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>kilgore</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Kilgore</td>
                    <td>Trout</td>
                    <td>kilgore</td>
                    <td class="text-center">
                      <a href="#" class="btn btn-info btn-xs">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                      </a> 
                      <a class="btn btn-danger btn-xs" href="#">
                        <span class="glyphicon glyphicon-remove"></span> Del
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Bob</td>
                    <td>Loblaw</td>
                    <td>boblahblah</td>
                    <td class="text-center">
                      <a href="#" class="btn btn-info btn-xs">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                      </a> 
                      <a class="btn btn-danger btn-xs" href="#">
                        <span class="glyphicon glyphicon-remove"></span> Del
                        </a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Holden</td>
                    <td>Caulfield</td>
                    <td>penceyreject</td>
                    <td class="text-center">
                      <a href="#" class="btn btn-info btn-xs">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                      </a> 
                      <a class="btn btn-danger btn-xs" href="#">
                        <span class="glyphicon glyphicon-remove"></span> Del
                        </a>
                    </td>
                  </tr>
                </tbody>
              </table>              
            </div>    
            <ul class="pagination" style="margin:-10px 0;">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>        
          </div>                           
        </div>
      </div>      
      <!-- END CFER -->       

      <!-- Site footer -->
      <div class="footer">
        <p>© Company 2014</p>
      </div>

        <script src="../js/libs/jquery-1.7.min.js"></script>
        <script src="../js/libs/bootstrap.min.js"></script>
        <script src="../js/libs/json.js"></script>
        <script src="../js/libs/base64.js"></script>
        <script src="../js/libs/jquery.tmpl.min.js"></script>
        <script src="../uploadFile/js/AjaxUpload.2.0.min.js"></script>
        <script src="../js/custom/customAdmin.js"></script>

    </div> <!-- /container -->

    <script id="archivoTemplate" type="text/html">
    <div class="row menuItem">
        <a class="col-md-9" href="${ruta}" target="_blank">${name}</a>
        <a class="col-md-3" href="#" onClick="removeFile(this,'${nameServer}','${flag}'); return false;">Remove</a>
    </div>
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 

</body>
</html>	
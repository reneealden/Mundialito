<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- CFER -->
    <div class="container">
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
          <div class="panel-heading">
              <div class="panel-title">Login Administrador - Mundialito</div>
              <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
          </div>     

          <div style="padding-top:30px" class="panel-body" >

              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  
              <form id="loginform" class="form-horizontal" role="form">
                          
                  <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="email">                                        
                          </div>
                      
                  <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                          </div>
                          

                      <!--
                  <div class="input-group">
                            <div class="checkbox">
                              <label>
                                 <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
                              </label>
                            </div>
                          </div>
                      -->

                      <div style="margin-top:10px" class="form-group">
                          <!-- Button -->

                          <div class="col-sm-12 controls">
                            <a id="btn-login" href="#" class="btn btn-success">Ingresar  </a>
                            <a id="btn-refresh" href="#" class="btn btn-primary">Refrescar </a>

                          </div>
                      </div>


                      <div class="form-group">
                          <div class="col-md-12 control">
                              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                  No tienes una cuenta! 
                              <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                  Registrate aqui
                              </a>
                              </div>
                          </div>
                      </div>    
                  </form>
              </div>                     
            </div>
          </div>

          <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
              <div class="panel-heading">
                  <div class="panel-title">Sign Up</div>
                  <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
              </div>  
              <div class="panel-body" >
                  <form id="signupform" class="form-horizontal" role="form">                    
                      <div id="signupalert" style="display:none" class="alert alert-danger">
                          <p>Error:</p>
                          <span></span>
                      </div>
                      <div class="form-group">
                          <label for="email" class="col-md-3 control-label">Email</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="email" placeholder="Email Address">
                          </div>
                      </div>
                          
                      <div class="form-group">
                          <label for="firstname" class="col-md-3 control-label">First Name</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="firstname" placeholder="First Name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="lastname" class="col-md-3 control-label">Last Name</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="password" class="col-md-3 control-label">Password</label>
                          <div class="col-md-9">
                              <input type="password" class="form-control" name="passwd" placeholder="Password">
                          </div>
                      </div>
                          
                      <div class="form-group">
                          <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="icode" placeholder="">
                          </div>
                      </div>

                      <div class="form-group">
                          <!-- Button -->                                        
                          <div class="col-md-offset-3 col-md-9">
                              <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                              <span style="margin-left:8px;">or</span>  
                          </div>
                      </div>
                      
                      <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                          
                          <div class="col-md-offset-3 col-md-9">
                              <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                          </div>                                                                       
                      </div>
                  </form>
               </div>
          </div>
        </div> 
      </div>    
    <!-- ENDCFER -->

    <!-- 
    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Login Administrator</h2>
        <input type="text" id="txtEmail" class="form-control" placeholder="Email address" autofocus>
        <br>
        <input type="password" id="txtPassword" class="form-control" placeholder="Password">
        <br>
        <input type="button" class="btn btn-lg btn-primary btn-block" id="btnEnviar" value="Ingresar">        
      </form>

    </div> --> <!-- /container -->

    <script src="../js/libs/jquery-1.7.min.js"></script>
    <script src="../js/libs/json.js"></script>
    <script src="../js/libs/base64.js"></script>
    <script src="../js/custom/customAdmin.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

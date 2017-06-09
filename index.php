<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrador</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/elements/form-elements.css">
  <link rel="stylesheet" href="assets/css/app/style.css">
  <link rel="shortcut icon" href="assets/ico/favicon.png">
</head>
<body>
 <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
</div>
 <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Administrador</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 text">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Ingresa a tu cuenta</h3>
                            </div>
                            </div>
                            <div class="form-bottom">
                            <form id="loginForm" name="loginForm" method="post" action="ac/login-exec.php" class="registration-form">
                              <div class="form-group">
                                  <label class="sr-only" for="form-first-name">Usuario</label>
                                  <input name="login" type="text" class="form-first-name form-control" id="login" placeholder="Ingresa tu usuario.." />
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-first-name">Contraseña</label>
                                <input name="password" type="password" placeholder="Ingresa tu contraseña.." class="form-first-name form-control" id="password" />
                              </div>
                              <input type="submit" name="Submit" value="Entrar" class="btn"/>
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

   <!-- JQuery v1.9.1 -->
    <script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
   <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <script src="assets/js/retina/retina-1.1.0.min.js"></script>
    <!-- Custom JQuery -->
   <script src="assets/js/app/custom.js" type="text/javascript"></script>
</body>
</html>

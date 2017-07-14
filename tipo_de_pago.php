<?php
  require_once('ac/auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin</title>

  <meta name="description" content="">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" /> 
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="assets/css/app/app.v1.css" />

    <!-- DateTime Picker  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" />

    <!-- Select  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select/bootstrap-select.min.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>
      .display-none{
          display:none;
      }
       
      .padding-bottom-2em{
          padding-bottom:2em;
      }
       
      .width-30-pct{
          width:30%;
      }
       
      .width-40-pct{
          width:40%;
      }
       
      .overflow-hidden{
          overflow:hidden;
      }
       
      .margin-right-1em{
          margin-right:1em;
      }
       
      .right-margin{
          margin:0 .5em 0 0;
      }
       
      .margin-bottom-1em {
          margin-bottom:1em;
      }
       
      .margin-zero{
          margin:0;
      }
       
      .text-align-center{
          text-align:center;
      }



      </style>
</head>
<body>

  <!-- Preloader -->
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
    <!-- Preloader -->  
    
  <aside class="left-panel">
        
            <div class="user text-center">
                  <img src="assets/images/avtar/user_default.png" class="img-circle" alt="...">
                  <h4 class="user-name"><?php echo utf8_encode($_SESSION['SESS_FIRST_NAME']);?></h4>
                  
                  <div class="dropdown user-login">
                    <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-circle status-icon available"></i> Disponible <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" href="ac/logout.php"><i class="fa fa-circle status-icon signout"></i> Salir</a></li>
                    </ul>
                  </div>
            </div>
            
            
            
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="has-submenu "><a href="dashboard.php"><i class="fa fa-list-ul"></i> <span class="nav-label">Proyectos</span></a>
                    </li>
                    <li class="has-submenu active"><a href="tipo_de_pago.php"><i class="fa fa-list-ul"></i> <span class="nav-label">Tipo de Pago</span></a>
                    </li>                    
                </ul>
            </nav>
            
    </aside>
    
    <section class="content">
      
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </header>
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
            <hr class="no-margn">
            
            <div class="page-header"><h3 id="page-title">Lista de Registrados</h3></div>
            <!--<div>
                <a href="exportar.producto.php" target="_blank" class="btn btn-primary">Exportar productos</a>
            </div>-->
            <div class='margin-bottom-1em overflow-hidden'>
                <div id='read-tipopago' class='btn btn-primary pull-right display-none'>
                    <span class='glyphicon glyphicon-list'></span> Listar Tipo de Pago
                </div>
                 
                <div id='create-tipopago' class='btn btn-primary pull-right'>
                    <span class='glyphicon glyphicon-plus'></span> Crear Tipo de Pago
                </div>
                                 <div id='loader-image'><img src='images/ajax-loader.gif' /></div>
            </div>

            <div id='page-content'></div>

            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
        <footer class="container-fluid footer">
          Copyright &copy; 2017 <a href="http://jorgecanari.com/" target="_blank">Marcos Galiano</a>
            <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
        </footer>
        
    
    </section>

  <script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>
  <script src="assets/js/moment/moment.js"></script>
  <script src="assets/js/collapse/collapse.js"></script>
  <script src="assets/js/transition/transition.js"></script>
  <script src="assets/js/holder/holder.js"></script>
  <script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
  <script src="assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
  <script src="assets/js/app/custom.js" type="text/javascript"></script>
  <script src="assets/js/tinymce/tinymce.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    
    $(document).ready(function(){
      $('#loader-image').show();
      showTiposPago();
      function showTiposPago(){
              
          changePageTitle('Lista de Tipos de Pago');
          
          $('#page-content').fadeOut('slow', function(){
              $('#page-content').load('read.tipopago.php', function(){
                  $('#loader-image').hide(); 
                  $('#page-content').fadeIn('slow');
              });
          });
      }
      $(document).on('click', '.delete-btn', function(){
          if(confirm('Estas seguro?')){
              var producto_id = $(this).closest('td').find('.producto-id').text();
              $.post("delete.php", { id: producto_id })
                  .done(function(data){
                      $('#loader-image').show();
                      showTiposPago();
                  });
          }
      });

      $('#read-tipopago').click(function(){
            $('#loader-image').show();
            $('#create-tipopago').show();
            $('#read-tipopago').hide();

            showMarcas();
        });
        $('#create-tipopago').click(function(){
            changePageTitle('Crear Marcas');
            $('#loader-image').show();
            $('#create-tipopago').hide();
            $('#read-tipopago').show();
            $('#page-content').fadeOut('slow', function(){
                $('#page-content').load('create_form_tipo_de_pago.php', function(){
                    $('#loader-image').hide();
                    $('#page-content').fadeIn('slow');
                });
            });
        });





      function changePageTitle(page_title){   
          $('#page-title').text(page_title);
          document.title=page_title;
      }
  });

  </script>


</body>
</html>

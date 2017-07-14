<?php

include_once 'config/database.php';
include_once 'objects/tipo_de_pago.php';

$database = new Database();
$db = $database->getConnection();
$m = new Tipo_de_pago($db);
      
$stmt = $m->readAll();
$num = $stmt->rowCount();

?>

<form id="fr" action="tipo_de_pago.php" enctype="multipart/form-data" method="post">
       <table class='table table-hover table-responsive table-bordered'>
        <tr class="des">
            <td>Codigo</td>
            <td>
                <textarea name='codigo' id="codigo" class='form-control'></textarea>
            </td>
        </tr>
        <tr class="des">
            <td>Descripción</td>
            <td>
                <textarea name='descripcion' id="descripcion" class='form-control'></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button class='btn btn-primary' id="btn-send" type="button">
                    <span class='glyphicon glyphicon-plus'></span> Crear Tipo de Pago
                </a>
            </td>
        </tr>
    </table>

</form>
<script type="text/javascript">
    $('#btn-send').click(function(event, data){
        if($('#codigo').val()==""){
            alert("Debe colocar un Nombre");
            $('#codigo').focus();
        } else if($('#descripcion').val()==""){
            alert("Debe colocar una descripción");
            $('#descripcion').focus();
        } else {
           $.post("create_tipo_de_pago.php", $('form#fr').serialize()).done(function(data) {
               $('#create-marcas').show();
               $('#read-marcas').hide();
               showMarcas();
            });
        }
    });
    function changePageTitle(page_title){   
            $('#page-title').text(page_title);
            document.title=page_title;
        }
    function showMarcas(){
            
        changePageTitle('Lista de Tipos de Pago');
        
        $('#page-content').fadeOut('slow', function(){
            $('#page-content').load('read.tipopago.php', function(){
                $('#loader-image').hide(); 
                $('#page-content').fadeIn('slow');
            });
        });
    }
</script>
</body>
</html>

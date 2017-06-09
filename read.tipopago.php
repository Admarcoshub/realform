<?php

include_once 'config/database.php';
include_once 'objects/tipo_de_pago.php';

$database = new Database();
$db = $database->getConnection();
 
$t = new Tipo_de_pago($db);
 
$stmt = $t->readAll();
$num = $stmt->rowCount();
if($num>0){
 
    echo "<table class='table table-bordered table-hover'>";
     
        echo "<tr>";
            echo "<th>id</th>";
            echo "<th>Codigo</th>";
            echo "<th>Descripción</th>";
            echo "<th style='text-align:center;'>Acción</th>";
        echo "</tr>";
         
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
             
            echo "<tr>";
                echo "<td>{$idpagos}</td>";
                echo "<td>".utf8_encode($codigo)."</td>";
                echo "<td>".utf8_encode($descripcion)."</td>";
                echo "<td style='text-align:center;'>";
                    echo "<div class='marca-id display-none'>{$idpagos}</div>";
                     
                    echo "<div class='btn btn-info edit-btn margin-right-1em update-btn'>";
                        echo "<span class='glyphicon glyphicon-edit'></span> Edit";
                    echo "</div>";
                     
                    echo "<div class='btn btn-danger delete-btn'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Delete";
                    echo "</div>";
                echo "</td>";
            echo "</tr>";
        }
         
    echo "</table>";
     
} else{
    echo "<div class='alert alert-info'>No se encontraron registro.</div>";
}
?>
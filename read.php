<?php

include_once 'config/database.php';
include_once 'objects/proyecto.php';

$database = new Database();
$db = $database->getConnection();
 
$p = new Proyecto ($db);
 
$stmt = $p->readAll();
$num = $stmt->rowCount();
if($num>0){
 
    echo "<table class='table table-bordered table-hover'>";
     
        echo "<tr>";
            echo "<th>idproyecto</th>";
            echo "<th>codigo</th>";
            echo "<th>descripcion</th>";
            echo "<th>costo</th>";
            echo "<th>fechinicio</th>";
            echo "<th>fechfin</th>";
            echo "<th>estado</th>";
            echo "<th style='text-align:center;'>Acción</th>";
        echo "</tr>";
         
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
             
            echo "<tr>";
                echo "<td>{$idproyecto}</td>";
                echo "<td>".utf8_encode($nombre)."</td>";
                echo "<td>{$codigo}</td>";
                echo "<td>{$descripcion}</td>";
                echo "<td>{$costo}</td>";
                echo "<td>{$fechinicio}</td>";
                echo "<td>{$fechfin}</td>";
                echo "<td>{$estado}</td>";
                echo "<td style='text-align:center;'>";
                    echo "<div class='producto-id display-none'>{$idproyecto}</div>";
                     
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
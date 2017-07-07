<?php
class Proyecto {
    private $conn;
    private $table_name = "proyecto";
     
    // object properties
    public $idproyecto;
    public $codigo;
    public $descripcion;
    public $costo;
    public $fechinicio;
    public $fechfin;
     
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function readAll(){
     
        $query = "SELECT idproyecto, codigo, descripcion, costo, fechinicio, fechfin, estado FROM  " . $this->table_name . " WHERE estado='1' ORDER BY idproyecto DESC";
        $stmt = $this->conn->prepare( $query );
         
        $stmt->execute(); 
        return $stmt;   
    }
}
?>
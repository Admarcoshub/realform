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

    function delete () {
        $query = "UPDATE
            " . $this->table_name . "
            SET 
                estado= :estado

            WHERE
                idproyecto = :id";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam('estado' , $this->estado);
        $stmt->bindParam('id' , $this->id);

        if ($stmt->execute()) {
            return true;
            } else {
            return false;    
            }
        }
    }
?>
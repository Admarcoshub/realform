<?php
class Producto{
    private $conn;
    private $table_name = "producto";
     
    // object properties
    public $id;
    public $categoria_id;
    public $marca_id;
    public $nombre;
    public $descripcion;
    public $stock;
    public $stock_minimo;
    public $precio_costo;
    public $precio_venta;
    public $utilidad;
    public $fechaingreso;
    public $estado;
     
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    function readAll(){
     
        $query = "SELECT id, categoria_id, marca_id, nombre, descripcion, 
                         stock, stock_minimo, precio_costo, precio_venta, utilidad,
                         fechaingreso, estado FROM  " . $this->table_name . " WHERE estado='1' ORDER BY id DESC";
        $stmt = $this->conn->prepare( $query );
         
        $stmt->execute(); 
        return $stmt;   
    }
}
?>
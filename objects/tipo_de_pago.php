<?php 
	class Tipo_de_pago  {
		private $conn;
		private $table_name = "tipo_de_pago";

		//object properties
		public $idpagos;
		public $codigo;
		public $descripcion;
		
		 // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    	}

    function readAll(){
     
        $query = "SELECT idpagos, codigo, descripcion FROM  " . $this->table_name . " WHERE estado='1' ORDER BY idpagos DESC";
        $stmt = $this->conn->prepare( $query );
         //echo $query;
        $stmt->execute(); 
        return $stmt;   
    }

    function exportExcel () {
			$query = "SELECT idpagos, codigo, descripcion from" .$this->$tipo_de_pago . "WHERE estado = '1'  ORDER BY id DESC";
			$stmt  = $this->conn->prepare( $query );

			$stmt->execute();
			return $stmt;
    }

    function create () {	

    	$query = "INSERT INTO 
                    " . $this->table_name . "
                SET 
                    codigo=:codigo,
                    descripcion=:descripcion,
                    estado=:estado";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":codigo", $this->codigo);
        $stmt->bindParam(":descripcion", $this->descripcion);
        $stmt->bindParam(":estado", $this->estado);
      
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>
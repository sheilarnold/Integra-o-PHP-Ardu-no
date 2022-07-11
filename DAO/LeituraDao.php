<?php
	require_once "../Control/ConexaoControl.php";
	
	class LeituraDao{
		
		public $con;
		
		public function __construct() {
			$this->con=Conexao::conectar();
		}
		
		function inserir(Leitura $leitura){
						
			$sql= "insert into leitura (id_sensor, data, valor) values ('{$leitura->getIdSensor()}', '{$leitura->getData()}','{$leitura->getValor()}')";
			
			echo $sql;
			
			$stm= $this->con->prepare($sql);
			
			if($stm->execute())
				return true;
			else
				return false;
				
		}
		
		public function listAll(){
			$consulta = $this->con->query("SELECT l.`id`, s.`nome`, l.`data`, l.`valor` FROM `leitura` AS l INNER JOIN `sensor` AS s WHERE l.id_sensor = s.id;");
			$dados = $consulta->fetchAll(PDO::FETCH_OBJ);
			return $dados;
		}
		
	}

?>

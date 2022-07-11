<?php
	require_once "../Control/ConexaoControl.php";
	
	class TemperaturaDao{
		
		public $con;
		
		public function __construct() {
			$this->con=Conexao::conectar();
		}
		
		function inserir(Temperatura $temp){
			
			echo "na inserção {$temp->getIdSensor()}";
			
			$sql= "insert into temperatura (id_sensor, data, valor) values ('{$temp->getIdSensor()}', '{$temp->getData()}','{$temp->getValor()}')";
			
			echo $sql;
			
			$stm= $this->con->prepare($sql);
			
			if($stm->execute())
				return true;
			else
				return false;
				
		}
		
		public function listAll(){
			$consulta = $this->con->query("SELECT t.`id`, s.`nome`, t.`data`, t.`valor` FROM `temperatura` AS t INNER JOIN `sensor` AS s WHERE t.id_sensor = s.id;");
			$dados = $consulta->fetchAll(PDO::FETCH_OBJ);
			return $dados;
		}
		
	}

?>

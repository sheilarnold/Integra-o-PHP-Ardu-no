<?php
	require_once "../Model/Leitura.php";
	require_once "../DAO/LeituraDao.php";
	
	class TemperaturaControl{
		public $dao;
		
		public function __construct(){
			
			if($_POST['acao'] == "0"){
				$this->inserir();
			}
			
		}
		
		function inserir(){
			 
			$obj = new Leitura();
			$obj->setIdSensor($_POST["sensor_id"]);
			$obj->setData(date('Y/m/d H:i:s'));
			$obj->setValor($_POST["valor"]);
															 
			$dao = new LeituraDao();
			$e = $dao->inserir($obj);
			
			if($e)
				echo "Novo registro inserido com sucesso!";
			else
				echo "Ops! Erro ao tentar inserir novo registro :(";

		}
		
		
		
	}
	new TemperaturaControl();

?>

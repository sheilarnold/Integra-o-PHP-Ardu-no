<?php

	class Temperatura{
		private $id;
		private $id_sensor;
		private $data;
		private $valor;

		function setId($id){
			$this->id=$id;
		}
		
		function getId(){
			return $this->id;
		}
		
		function setIdSensor($id){
			$this->idSensor=$id;
		}
		
		function getIdSensor(){
			return $this->idSensor;
		}
		
		function setData($data){
			$this->data=$data;
		}
		
		function getData(){
			return $this->data;
		}
		
		function setValor($valor){
			$this->valor=$valor;
		}
		
		function getValor(){
			return $this->valor;
		}
		
	}

?>

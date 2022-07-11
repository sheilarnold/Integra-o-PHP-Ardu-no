<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	/*echo "This is a warning error";*/
	include '../DAO/TemperaturaDao.php';
	include 'mostratemp.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Leitor de Temperatura</title>
		
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../Resources/index.js"></script>
		
	</head>
	<body>

	   <div id="temperatura">
		   <?php
				  date_default_timezone_set("America/Sao_Paulo");
				  echo "Data: ".date("d/m/Y");
				  echo "<br>Hora: ".date("H:i:s");
				  echo "<div id='temp'>Temperatura: ".temperatura()."</div>";

		   ?>
	   </div>
	   <br>
	   <div id="list_leituras">
	   <table border="1">
			<thead>
				<td>ID</td>
				<td>Sensor</td>
				<td>Data e hora da leitura</td>
				<td>Valor da leitura</td>
			</thead>
			<tbody>
			   
					<?php
						$obj = new TemperaturaDao();
						$dados= $obj->listAll();
						
						foreach ($dados as $dado) {
							echo "<tr>";
								echo "<td>".$dado->id."</td>";
								echo "<td>".$dado->nome."</td>";
								echo "<td>".$dado->data."</td>";
								echo "<td>".$dado->valor."</td>";
							echo "</tr>";
						}
					?>
			   
		   </tbody>
		   </div>
	   </table>
	</body>
</html>



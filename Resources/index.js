
$(document).ready(function(){
	setInterval(function(){
		$('#temperatura').load(window.location.href + " " + '#temperatura');
		registra_temperatura();
	}, 5000);
});

function registra_temperatura(){
	valorDiv = $("#temp").text();
	temperatura = valorDiv.split("Temperatura: ")[1];
	
	leitura = {
		acao: 0,
		sensor_id: 1,
		valor: temperatura
	}
	
	$.ajax({
        url: "../Control/TemperaturaControl.php",
        type: "post",
        data: leitura ,
        success: function (response) {
			console.log(response);
			$('#list_leituras').load(window.location.href + " " + '#list_leituras');
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
	
}

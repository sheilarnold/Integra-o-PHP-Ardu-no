<?php
function temperatura()
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
        $port = fopen("COM3", "r");
    else
        $port = fopen("/dev/ttyACM0", "r");
    exec("MODE $port BAUD=9600 PARITY=n DATA=8 XON=on STOP=1");

    $bytes = fread($port, 10); // Lendo uma linha da conexão, até 1024 bytes
    $m=0;
    if (strlen($bytes) > 0) { // Se o Arduino enviou algo ...
        $vet = explode(",", $bytes); // Imprimimos
        $t=count($vet);
        $v=0;

		for ($i=0; $i<$t; $i++){
			$v+=doubleval($vet[$i]);
			$m=$v/$t;
        }
        
    }
    
    fclose($port);
    return $m;
}

<?php
$valor_estado=$_POST['valor_estado'];

	exec('sudo python /var/www/pi/leds/alloff.py');

//Manejo Bombillo Blanco
if($valor_estado==0)
{
    exec('sudo python /var/www/pi/leds/apagaW.py');
}
elseif ($valor_estado==1){
	exec('sudo python /var/www/pi/leds/prendeW.py');
}
//Manejo Bombillo Rojo
elseif ($valor_estado==2){
    exec('sudo python /var/www/pi/leds/apagaR.py');
}
elseif ($valor_estado==3){
	exec('sudo python /var/www/pi/leds/prendeR.py');
}
//Manejo Bombillo Verde
elseif($valor_estado==4)
{
    exec('sudo python /var/www/pi/leds/apagaG.py');
}
elseif ($valor_estado==5){
	exec('sudo python /var/www/pi/leds/prendeG.py');
}
//Manejo Bombillo Azul
elseif ($valor_estado==6)
{
    exec('sudo python /var/www/pi/leds/apagaB.py');
}
else{
	exec('sudo python /var/www/pi/leds/prendeB.py');
}
?>
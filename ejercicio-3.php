<center><h4>Conversor de Pesos a Dolar</h4>
<hr>
<?php
//divisa = al monto en dolares que desea convertir
$divisa = 100;
echo "$ ".$divisa." Dolar Estadounidense<br>";
$tasa = 50.82;
echo "RD$ ".$tasa." Tasa al Dia <br><hr>";
function Conversor($divisa,$tasa){
return $conversion = $divisa*$tasa;
}
	echo "<b>RD$ ".Conversor($divisa,$tasa)." Pesos Dominicanos</b>";
?>
</center>

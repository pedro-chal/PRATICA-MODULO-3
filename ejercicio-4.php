	<?php
session_start();
if(isset($_POST['Nombre']) && isset($_POST['Numero'])){
$nombre = $_POST['Nombre'];
$numero = $_POST['Numero'];
if (isset($_SESSION['Data'])) {
 $array =  $_SESSION['Data'];
$newdatos = array('Nombre' => $nombre,
'Numero'=>$numero );
array_push($array,$newdatos);
$_SESSION['Data']=$array;
	}else{
 $Datos[] = array('Nombre' => $nombre,
 'Numero'=>$numero );
 $_SESSION['Data']=$Datos;
	}

}
	?>


<center><h1>Datos en array</h1>
<hr>
<form action="" method="post">
<label>Insertar Nombre</label><input name="Nombre" type="text">
<label>Insertar Numero de telefono</label><input name="Numero" type="text">
 <button>Guardar</button>
</form>
<hr>
 <table border=1>
 <tr>
<th>Nombres</th>
<th>Numeros</th>
</tr>
<?php
if(isset($_SESSION['Data'])){
 $Data = $_SESSION['Data'];
foreach ($Data as $key => $value) {
?>
<tr>
<td><?php echo $value['Nombre'];?></td>
<td><?php echo $value['Numero']; ?></td>
</tr>
<?php
}
}
?>
</table> </center>
</body>
</html>

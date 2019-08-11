<?php
$palabrasReservadas= array('include_once'=>'La sentencia include_once incluye y evalúa el fichero especificado durante la ejecución del script. Tiene un comportamiento similar al de la sentencia include, siendo la única diferencia de que si el código del fichero ya ha sido incluido, no se volverá a incluir, e include_once devolverá TRUE. Como su nombre indica, el fichero será incluido solamente una vez.','private'=>'La visibilidad de una propiedad, un método o (a partir de PHP 7.1.0) una constante se puede definir anteponiendo a su declaración una de las palabras reservadas public, protected o private. A los miembros de clase declarados como public se puede acceder desde donde sea; a los miembros declarados como protected, solo desde la misma clase o mediante clases heredadas. A los miembros declarados como private únicamente se puede acceder desde la clase que los definió.','return'=>'return devuelve el control del programa al módulo que lo invoca. La ejecución vuelve a la siguiente expresión después del módulo que lo invoca.','try'=>'PHP 5 tiene un modelo de excepciones similar al de otros lenguajes de programación. Una excepción puede ser lanzada ("thrown"), y atrapada ("catched") dentro de PHP. El código puede estar dentro de un bloque try para facilitar la captura de excepciones potenciales. Cada bloque try debe tener al menos un bloque catch o finally correspondiente.','public'=>'La visibilidad de una propiedad, un método o (a partir de PHP 7.1.0) una constante se puede definir anteponiendo a su declaración una de las palabras reservadas public, protected o private. A los miembros de clase declarados como public se puede acceder desde donde sea; a los miembros declarados como protected, solo desde la misma clase o mediante clases heredadas. A los miembros declarados como private únicamente se puede acceder desde la clase que los definió.','array()'=>'array — Crea un array'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    
    <center><h1>Practica de PHP incluir todos los proyectos en 1</h1></center>
    <!--- primera practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">1.	Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación</p>
    <?php include('ejercicio-1.php') ?>
  </div>
</div>
<br>
    <!--- segunda practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">2.	Crea la variable $nombre y asígnale tu nombre completo. Muestra su valor por pantalla.</p>
    <?php include('ejercicio-2.php') ?>
  </div>
</div>
<br>
    <!--- tercera practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">3.	Realiza un conversor de monedas. La cantidad en pesetas que se quiere convertir y la tasa de cambio deberán estar almacenada en variables. Este deberá de realizarlo una función, es decir, la función recibirá las variables necesarias para realizar el cambio.</p>
    <?php include('ejercicio-3.php') ?>
  </div>
</div>
<br>
    <!--- cuarto practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">4. Página web que permita insertar un dato ya sea nombre de usuario, apellido, números, lo que sea (cualquier tipo de cadena de texto), estos datos los inserte en un array y permita visualizar los valores insertados.</p>
    <?php include('ejercicio-4.php') ?>
  </div>
</div>
<br>
    <!--- cuarto practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">5. Un script que muestre la url actual.</p>
    <?php include('ejercicio-5.php') ?>
  </div>
</div>
<br>
    <!--- quinta practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">6.	Un script que muestre la IP del cliente, la IP del servidor y el nombre del fichero que se está ejecutando.</p>
    <?php include('ejercicio-6.php') ?>
  </div>
</div>
<br>
    <!--- quinta practica --->
    <div class="card">
  <div class="card-body">
    
    <p class="card-text">7.	Un script que muestre la versión de PHP sin utilizar Phpinfo().</p>
    <?php include('ejercicio-7.php') ?>
  </div>
</div>

<br>
<div class="row">
<div class="col-12">
<p>Realizar lista con array en PHP que contenga mínimo 5 palabras reservadas del lenguaje y presentar en vista usando un ciclo, el componente a utilizar será un card. Organizar uno al lado de otro como tipo tabla</p>
</div>
<?php
$index = 0;
foreach ($palabrasReservadas as $key => $value) {
    # recorriendo el arra para leer las palabras reservadas
    $index++;
?>
<div class="col-4">
<div class="card">
   <div class="card-body">
    <h5 class="card-title text-center text-warning"><?php echo  $index;  ?>-<?php echo  $key;  ?></h5>
    <hr>
    <p class="card-text lead"><?php echo $value;  ?></p>
  </div>
</div>
</div>

<?php
}
?>



</div>

    </div>
</body>
</html>
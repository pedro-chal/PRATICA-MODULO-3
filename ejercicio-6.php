<?php
//La dirección IP del servidor donde se está ejecutando actualmente el script
echo $_SERVER['SERVER_ADDR']."<br>";
//La dirección IP desde la cual está viendo la página actual el usuario.
echo $_SERVER['REMOTE_ADDR']."<br>";
//El nombre del archivo de script ejecutándose actualmente
echo $_SERVER['PHP_SELF']."<br>";

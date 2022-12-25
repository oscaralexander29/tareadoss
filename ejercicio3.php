<?php
/* Crear 5 variables de sesión y asignarles valores. Luego imprimir sus resultados en pantalla. */
session_start();

$_SESSION["nombre"] = "Oscar Alexander";
$_SESSION["apellido"] = "Ceron Hernandez";
$_SESSION["dirreccion"] = "Santa Maria Ostuma";
$_SESSION["edad"] = 18;
$_SESSION["dui"] = "4633463-1";
print "<p><strong>Nombre:</strong> $_SESSION[nombre]</p>";
print "<p><strong>Apellido: </strong> $_SESSION[apellido]</p>";
print "<p><strong>Direccion: </strong> $_SESSION[dirreccion]</p>";
print "<p><strong>Edad: </strong> $_SESSION[edad]</p>";
print "<p><strong>Numero de DUI: </strong> $_SESSION[dui]</p>";

?>
<?php
$Usuario = htmlentities($_POST['Usuario']);
$Contraseña =htmlentities($_POST['Contraseña']);
echo "Datos del Usuario" .$Usuario. " " .$Contraseña;
?>
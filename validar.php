<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

if ($usuario=="admin" and $contraseña=="admin") {
    header ("location: Inicio.html");
}
else {
    echo '<script language="javascript">';
    echo 'alert("Usuario o Contraseña Incorrecta")';
    echo '</script>';
}
?>
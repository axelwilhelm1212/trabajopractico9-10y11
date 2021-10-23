<?php
$nombreUsuario = $_POST["nombreUs"];
$emailUsuario = $_POST["emailUs"];
$passUs = md5($_POST["passUs"]);
$validoUS = "axel";
$emailValido = "axel@wilhelm.com";
$passValida = "cf96bce69f409820e4b6bce661eb4e78";
if($nombreUsuario == $validoUS && $emailUsuario == $emailValido && $passUs == $passValida){
    echo "Logueo Exitoso";
}
else {
    echo "Datos invalidos";
}
?>
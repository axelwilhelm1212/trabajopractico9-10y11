<?php
function login($u,$e,$c) {


$validoUs = "axel";
$emailValido = "axel@wilhelm.com";
$passValida = "cf96bce69f409820e4b6bce661eb4e78";
if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
    return "Logueo exitoso";
} 
else 
{
    header("Location: index.php");
    
}
}
?>

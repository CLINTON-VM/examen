<?php
$url = $_SERVER['REQUEST_URI'];
//echo $url;
if($url == "/EXAMEN02/public/"){
 require_once "../views/inicio.php";

}elseif ($url == "/EXAMEN02/public/ejercicio01/"){
    require_once "../views/ejercicio01.php";

}elseif ($url == "/EXAMEN02/public/ejercicio02/"){
    require_once "../views/ejercicio02.php";

}elseif ($url == "/EXAMEN02/public/ejercicio03/"){
    require_once "../views/ejercicio03.php";
}
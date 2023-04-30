<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$databases = "cadastro";

$mysql = new mysqli($host, $usuario, $senha, $databases);

if($mysql->error){
    die("falha ao conectar" . $mysql->error);
}

?>
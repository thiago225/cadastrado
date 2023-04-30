<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senhaCRIP = sha1($senha);

$sql2 = mysqli_query($mysql, "SELECT * FROM login WHERE usuario = '$usuario'");

if($sql2->num_rows > 0){
    echo "ja cadastrado";
}else{
    $slq = mysqli_query($mysql, "INSERT INTO login(nome, sobrenome, usuario, senha) 
                                   VALUES('$nome', '$sobrenome', '$usuario', '$senhaCRIP')");
    echo "usuario ja cadastrodo";
}
?>
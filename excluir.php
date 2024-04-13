<?php
$id = $_GET['id'];
include "conexoes.php";
$sql = "delete from tarefas where id = $id";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location: index.php");
?>
<?php 
include_once("conexao.php");

$admin_id = $_GET["id"];

$query = mysqli_query($conexao, "DELETE FROM administrador WHERE id = $admin_id"); 

header("Location: cadastro_administrador.php");

?>
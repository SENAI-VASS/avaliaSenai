<?php 
include_once("conexao.php");

$prof_id = $_GET["prof"];
$curso_id = $_GET["curso"];

$query = mysqli_query($conexao, "DELETE FROM cursoTemProfessor WHERE profId = $prof_id AND cursoId = $curso_id"); 

header("Location: gerencia_curso.php?id=$curso_id");

?>
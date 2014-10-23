<?php 
    include_once("conexao.php");

    $avaliacao = $_POST["avaliacao"];


    if($avaliacao == "curso"){
        $cargaHoraria = $_POST["carga_horaria"];
        $grade = $_POST["grade"];
        $confianca = $_POST["confianca"];
        $comentario = $_POST["comentario"];
        
        mysqli_query($conexao, 
        "INSERT INTO avaliacaoCurso (cursoId, dataHora, cargaHoraria, grade, confianca, comentario) 
        values
        
        ");
    }


?>
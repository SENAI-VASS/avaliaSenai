<?php 
    include_once("conexao.php");
    include_once("seguranca.php");

    $curso_id = $_SESSION["curso_id"];
    $aluno_id = $_SESSION["aluno_id"];

    $avaliacao = $_POST["avaliacao"];

    if($avaliacao == "curso"){
        $cargaHoraria = $_POST["carga_horaria"];
        $grade = $_POST["grade"];
        $confianca = $_POST["confianca"];
        $comentario = $_POST["comentario"];
        
        mysqli_query($conexao, 
        "INSERT INTO avaliacaoCurso (cursoId, datahora, cargaHoraria, grade, confianca, comentario) 
        values ( $curso_id, NOW(), $cargaHoraria, $grade, $confianca, '$comentario'");
      
        mysqli_query($conexao, "INSERT INTO relatorioAvaliacao (alunoId, item, dia) values ($aluno_id, 'curso', CURRENT_DATE()) ");      
    }else if($avaliacao == "professor"){
      $prof_id = $_POST["professor"];
      $frequencia = $_POST["frequencia"];
      $pontualidade = $_POST["pontualidade"];
      $dominioDisciplina = $_POST["dominio_da_disciplina"];
      $clarezaExplicacao = $_POST["clareza_na_explicacao"];
      $habilidadeEstimular = $_POST["habilidade_de_estimular_alunos"];
      $instrumentos = $_POST["instrumentos_de_avaliacao"];
      $comentario = $_POST["comentario"];
      
      mysqli_query($conexao, "INSERT INTO avaliacaoProfessor (profId, cursoId, datahora, pontualidade, frequencia, dominioDaDisciplina, clarezaNaExplicacao, habilidadeDeEstimularAlunos, instrumentosDeAvaliacao, comentario) values ($prof_id, $curso_id, NOW(), $pontualidade, $frequencia, $dominioDisciplina, $clarezaExplicacao, $habilidadeEstimular, $instrumentos, $comentario ) ");
      
      mysqli_query($conexao, "INSERT INTO relatorioAvaliacaoProfessor (alunoId, profId, dia) values ($aluno_id, $prof_id, CURRENT_DATE()) ");
    }else if($avaliacao == "laboratorio" ){
      $acessibilidade = $_POST["acessibilidade"];
      $espacoFisico = $_POST["espaco_fisico"];
      $limpeza = $_POST["limpeza"];
      $recursos = $_POST["recursos"];
      $climatizacao = $_POST["climatizacao"];
      $iluminacao = $_POST["iluminacao"];
      $comentario = $_POST["comentario"];
      
      mysqli_query($conexao, "INSERT INTO ");
    }
?>
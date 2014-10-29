<?php

function obterMedia($tabela, $campo){

  global $conexao;
  global $curso_id;

  $query = mysqli_query($conexao, "SELECT AVG($campo) FROM $tabela WHERE cursoId = $curso_id");

  $criterio = mysqli_fetch_array($query);

  $valor = $criterio["AVG($campo)"];
  
  echo round( ($valor / 5) * 100 ,2)."%";
}

function obterMediaProfessor($campo){

  global $conexao;
  global $curso_id;
  global $prof_id;

  $query = mysqli_query($conexao, "SELECT AVG($campo) FROM avaliacaoProfessor WHERE cursoId = $curso_id AND profId = $prof_id");

  $criterio = mysqli_fetch_array($query);

  $valor = $criterio["AVG($campo)"];
  
  echo round( ($valor / 5) * 100 ,2)."%";
}

function obterMediaGeralProfessor($campo){

  global $conexao;
  global $prof_id;

  $query = mysqli_query($conexao, "SELECT AVG($campo) FROM avaliacaoProfessor WHERE profId = $prof_id");

  $criterio = mysqli_fetch_array($query);

  $valor = $criterio["AVG($campo)"];
  
  echo round( ($valor / 5) * 100 ,2)."%";
}



function obterNumVotos($tabela, $campo, $valor){
  global $conexao;
  global $curso_id;

  $query = mysqli_query($conexao, "SELECT $campo FROM $tabela WHERE $campo = $valor AND cursoId = $curso_id"); 
  $num_votos = mysqli_num_rows($query);

  if($num_votos >= 2){
    echo $num_votos." votos"; 
  }else{
    echo $num_votos." voto";
  }
}

function obterNumVotosProfessor($tabela, $campo, $valor, $prof){
  global $conexao;
  global $curso_id;

  $query = mysqli_query($conexao, "SELECT $campo FROM $tabela WHERE $campo = $valor AND cursoId = $curso_id AND profId = $prof");
  
  $num_votos = mysqli_num_rows($query);

  if($num_votos >= 2){
    echo $num_votos." votos"; 
  }else{
    echo $num_votos." voto";
  }
}

?>
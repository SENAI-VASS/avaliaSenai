<?php
  session_start();
  if( !isset($_SESSION["aluno_id"]) ){
    header("location: login.php");
  }
?>
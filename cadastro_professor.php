<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php");

$navbar_opcao = ""?>

<div class="container-fluid">
  <div class="row">

    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    

<form class="form-horizontal" role="form" action="grava_professor.php" method="post">
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>
</form>

    </div>

<?php include_once("footer_admin.php"); ?>
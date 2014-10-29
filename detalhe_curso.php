<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "curso";
$curso_id = $_GET["id"];

$query = mysqli_query($conexao, "SELECT * FROM curso WHERE id = $curso_id");

$curso = mysqli_fetch_array($query);
?>

<div class="container-fluid">
  <div class="row">

    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="row">
        <div class="col-md-12">
          <h4><?php echo $curso['nome'] ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Carga horária</h3>
          <h1><?php obterMedia('avaliacaoCurso','cargaHoraria'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','cargaHoraria', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','cargaHoraria', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','cargaHoraria', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','cargaHoraria', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','cargaHoraria', 1); ?></h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <h3>Grade</h3>
          <h1><?php obterMedia('avaliacaoCurso','grade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','grade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','grade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','grade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','grade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','grade', 1); ?></h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <h3>Confiança</h3>
          <h1><?php obterMedia('avaliacaoCurso','confianca'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','confianca', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','confianca', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','confianca', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','confianca', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCurso','confianca', 1); ?></h4>
        </div>
      </div>
      
    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
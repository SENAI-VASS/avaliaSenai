<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "laboratorio";
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
          <h3>Acessibilidade</h3>
          <h1><?php obterMedia('avaliacaoLaboratorio','acessibilidade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','acessibilidade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','acessibilidade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','acessibilidade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','acessibilidade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','acessibilidade', 1); ?></h4>
        </div>
      </div>      
      
      <div class="row">
        <div class="col-md-2">
          <h3>Espaço Físico</h3>
          <h1><?php obterMedia('avaliacaoLaboratorio','espacoFisico'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','espacoFisico', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','espacoFisico', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','espacoFisico', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','espacoFisico', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','espacoFisico', 1); ?></h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <h3>Limpeza</h3>
          <h1><?php obterMedia('avaliacaoLaboratorio','limpeza'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','limpeza', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','limpeza', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','limpeza', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','limpeza', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','limpeza', 1); ?></h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <h3>Recursos</h3>
          <h1><?php obterMedia('avaliacaoLaboratorio','recursos'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','recursos', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','recursos', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','recursos', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','recursos', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','recursos', 1); ?></h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <h3>Climatização</h3>
          <h1><?php obterMedia('avaliacaoLaboratorio','climatizacao'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','climatizacao', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','climatizacao', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','climatizacao', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','climatizacao', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','climatizacao', 1); ?></h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-2">
          <h3>Iluminação</h3>
          <h1><?php obterMedia('avaliacaoLaboratorio','iluminacao'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','iluminacao', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','iluminacao', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','iluminacao', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','iluminacao', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoLaboratorio','iluminacao', 1); ?></h4>
        </div>
      </div>
      
    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
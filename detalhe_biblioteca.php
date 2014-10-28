<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "biblioteca";
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
          <h1><?php obterMedia('avaliacaoBiblioteca','acessibilidade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acessibilidade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acessibilidade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acessibilidade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acessibilidade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acessibilidade', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Acervo</h3>
          <h1><?php obterMedia('avaliacaoBiblioteca','acervo'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acervo', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acervo', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acervo', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acervo', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','acervo', 1); ?></h4>
        </div>
      </div>      

      <div class="row">
        <div class="col-md-2">
          <h3>Espaço Físico</h3>
          <h1><?php obterMedia('avaliacaoBiblioteca','espacoFisico'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','espacoFisico', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','espacoFisico', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','espacoFisico', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','espacoFisico', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','espacoFisico', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Limpeza</h3>
          <h1><?php obterMedia('avaliacaoBiblioteca','limpeza'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','limpeza', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','limpeza', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','limpeza', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','limpeza', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','limpeza', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Equipamentos</h3>
          <h1><?php obterMedia('avaliacaoBiblioteca','equipamentos'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','equipamentos', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','equipamentos', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','equipamentos', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','equipamentos', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','equipamentos', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Climatização</h3>
          <h1><?php obterMedia('avaliacaoBiblioteca','climatizacao'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','climatizacao', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','climatizacao', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','climatizacao', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','climatizacao', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','climatizacao', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Iluminação</h3>
          <h1><?php obterMedia('avaliacaoBiblioteca','iluminacao'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','iluminacao', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','iluminacao', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','iluminacao', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','iluminacao', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBiblioteca','iluminacao', 1); ?></h4>
        </div>
      </div>

    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
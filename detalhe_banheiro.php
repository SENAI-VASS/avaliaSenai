<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "banheiro";
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
          <h1><?php obterMedia('avaliacaoBanheiro','acessibilidade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','acessibilidade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','acessibilidade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','acessibilidade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','acessibilidade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','acessibilidade', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Limpeza</h3>
          <h1><?php obterMedia('avaliacaoBanheiro','limpeza'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','limpeza', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','limpeza', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','limpeza', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','limpeza', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','limpeza', 1); ?></h4>
        </div>
      </div>      

      <div class="row">
        <div class="col-md-2">
          <h3>Material para higiene</h3>
          <h1><?php obterMedia('avaliacaoBanheiro','materialHigiene'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','materialHigiene', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','materialHigiene', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','materialHigiene', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','materialHigiene', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','materialHigiene', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Quantidade de banheiros</h3>
          <h1><?php obterMedia('avaliacaoBanheiro','quantidade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','quantidade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','quantidade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','quantidade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','quantidade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoBanheiro','quantidade', 1); ?></h4>
        </div>
      </div>

      

    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
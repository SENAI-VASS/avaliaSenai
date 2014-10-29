<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "cantina";
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
          <h1><?php obterMedia('avaliacaoCantina','acessibilidade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','acessibilidade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','acessibilidade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','acessibilidade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','acessibilidade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','acessibilidade', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Variedade</h3>
          <h1><?php obterMedia('avaliacaoCantina','variedade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','variedade', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','variedade', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','variedade', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','variedade', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','variedade', 1); ?></h4>
        </div>
      </div>      

      <div class="row">
        <div class="col-md-2">
          <h3>Preços</h3>
          <h1><?php obterMedia('avaliacaoCantina','precos'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','precos', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','precos', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','precos', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','precos', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','precos', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Atendimento</h3>
          <h1><?php obterMedia('avaliacaoCantina','atendimento'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','atendimento', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','atendimento', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','atendimento', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','atendimento', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','atendimento', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Horário de funcionamento</h3>
          <h1><?php obterMedia('avaliacaoCantina','horarioFuncionamento'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','horarioFuncionamento', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','horarioFuncionamento', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','horarioFuncionamento', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','horarioFuncionamento', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','horarioFuncionamento', 1); ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Limpeza</h3>
          <h1><?php obterMedia('avaliacaoCantina','limpeza'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','limpeza', 5); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','limpeza', 4); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','limpeza', 3); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','limpeza', 2); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotos('avaliacaoCantina','limpeza', 1); ?></h4>
        </div>
      </div>

    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
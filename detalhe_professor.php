<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "professor";
$curso_id = $_GET["curso"];
$prof_id = $_GET["prof"];

$query = mysqli_query($conexao, "SELECT * FROM curso WHERE id = $curso_id");

$curso = mysqli_fetch_array($query);

$query2 = mysqli_query($conexao, "SELECT * FROM professor WHERE id = $prof_id");

$professor = mysqli_fetch_array($query2);
?>

<div class="container-fluid">
  <div class="row">

    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="row">
        <div class="col-md-12">
          <h4>Professor <?php echo $professor['nome']?> no curso <?php echo $curso['nome'] ?></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <h3>Pontualidade</h3>
          <h1><?php obterMediaProfessor('pontualidade'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','pontualidade', 5, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','pontualidade', 4, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','pontualidade', 3, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','pontualidade', 2, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','pontualidade', 1, $prof_id); ?></h4>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-2">
          <h3>Frequência</h3>
          <h1><?php obterMediaProfessor('frequencia'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','frequencia', 5, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','frequencia', 4, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','frequencia', 3, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','frequencia', 2, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','frequencia', 1, $prof_id); ?></h4>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-2">
          <h3>Domínio da Disciplina</h3>
          <h1><?php obterMediaProfessor('dominioDaDisciplina'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','dominioDaDisciplina', 5, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','dominioDaDisciplina', 4, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','dominioDaDisciplina', 3, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','dominioDaDisciplina', 2, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','dominioDaDisciplina', 1, $prof_id); ?></h4>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-2">
          <h3>Clareza na Explicação</h3>
          <h1><?php obterMediaProfessor('clarezaNaExplicacao'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','clarezaNaExplicacao', 5, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','clarezaNaExplicacao', 4, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','clarezaNaExplicacao', 3, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','clarezaNaExplicacao', 2, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','clarezaNaExplicacao', 1, $prof_id); ?></h4>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-2">
          <h3>Habilidade em estimular alunos</h3>
          <h1><?php obterMediaProfessor('habilidadeDeEstimularAlunos'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','habilidadeDeEstimularAlunos', 5, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','habilidadeDeEstimularAlunos', 4, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','habilidadeDeEstimularAlunos', 3, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','habilidadeDeEstimularAlunos', 2, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','habilidadeDeEstimularAlunos', 1, $prof_id); ?></h4>
        </div>
      </div>
       
       <div class="row">
        <div class="col-md-2">
          <h3>Instrumentos de avaliação</h3>
          <h1><?php obterMediaProfessor('instrumentosDeAvaliacao'); ?></h1>
        </div>
        <div class="col-md-2">
          <h3>Excelente</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','instrumentosDeAvaliacao', 5, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Bom</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','instrumentosDeAvaliacao', 4, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Regular</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','instrumentosDeAvaliacao', 3, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Ruim</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','instrumentosDeAvaliacao', 2, $prof_id); ?></h4>
        </div>
        <div class="col-md-2">
          <h3>Péssimo</h3>
          <h4><?php echo obterNumVotosProfessor('avaliacaoProfessor','instrumentosDeAvaliacao', 1, $prof_id); ?></h4>
        </div>
      </div>
        
      
      
    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
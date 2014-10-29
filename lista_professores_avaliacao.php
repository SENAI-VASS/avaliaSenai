<?php include_once("header.php"); include_once("seguranca.php"); include_once("conexao.php");

$curso_id = $_SESSION['curso_id'];

?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Selecione o professor a ser avaliado</h2>
    </div>
  </div>


  <div class="row">

    <?php 
$query = mysqli_query($conexao, "SELECT * FROM cursoTemProfessor WHERE cursoId = $curso_id");

while( $professores = mysqli_fetch_array($query) ){
  $prof_id = $professores['profId'];

  $query2 = mysqli_query($conexao, "SELECT * FROM professor WHERE id = $prof_id");

  while( $professor = mysqli_fetch_array($query2) ){ ?>

    <div class="col-md-3 col-sm-6">
      <div class="avaliacao-opcao">
        <h4><?php echo $professor['nome']; ?></h4>
        <a href="avaliacao_professor.php?id=<?php echo $professor['id']?>" class="btn btn-primary">Avaliar</a>
      </div>
    </div>



    <?php } } ?>

  </div>
</div>






<?php include_once("footer.php") ?>
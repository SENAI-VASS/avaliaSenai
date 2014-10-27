<?php include_once("header.php");
include_once("conexao.php");

$curso_id = $_GET['id'];
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Alunos</h3>
      <table class="table">
        <th>Nome</th>
        <th>Matrícula</th>  

        <tbody>

          <?php

$query = mysqli_query($conexao, "SELECT * FROM aluno WHERE cursoId = $curso_id ORDER BY nome ASC");

while( $aluno = mysqli_fetch_array($query) ){ ?>

          <tr>
            <td><a href="detalhe_aluno.php?id=<?php echo $aluno['id'] ?>"><?php echo $aluno["nome"]?></a></td>
            <td><?php echo $aluno["matricula"]?></td>
          </tr>

          <?php } ?>

        </tbody>
      </table>
    </div>

    <div class="col-md-6">
      <h3>Professores</h3>
      <table class="table">
        <th>Nome</th>
        <th></th> 

        <tbody>
          <?php $query = mysqli_query($conexao, "SELECT profId FROM cursoTemProfessor WHERE cursoId = $curso_id");
while( $professores = mysqli_fetch_array($query) ){
  $prof_id = $professores['profId'];
  $query2 = mysqli_query($conexao, "SELECT * FROM professor WHERE id = $prof_id"); 
  while( $professor = mysqli_fetch_array($query2) ){
          ?>
          <tr>
            <td><a href="#"><?php echo $professor["nome"]?></a></td>
            <td><a href="remove_professor_curso.php?prof=<?php echo $professor['id'] ?>&curso=<?php echo $curso_id ?>"><i class="fa fa-trash-o"> Remover</i></a></td>
          </tr>
          <?php } } ?>
        </tbody>
      </table>

      <form action="detalhe_curso.php" class="form form-horizontal"method="post">
        <div class="form-group">
          <label for="professor" class="control-label col-sm-2">Professor</label>
          <div class="col-sm-8">
            <select name="professor" id="professor" class="form-control">
              <?php $query = mysqli_query($conexao, "SELECT * FROM professor ORDER BY nome ASC"); 
while($professor = mysqli_fetch_array($query)){ ?>
              <option value="<?php echo $professor['id'] ?>"><?php echo $professor['nome'] ?></option>
              <?php }   ?>
            </select>
          </div>

          <input type="hidden" value="<?php echo $curso_id ?>" name="curso">
          <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </div>
      </form>

    </div>
  </div>


</div>

<?php if(isset($_POST["professor"])){
  $prof_id = $_POST["professor"];
  $curso_id = $_POST["curso"];
  $query = mysqli_query($conexao, "INSERT INTO cursoTemProfessor (cursoId, profId) VALUES ($curso_id, $prof_id) ");

  header("location: detalhe_curso.php?id=".$curso_id);
}

?>
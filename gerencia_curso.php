<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php");

$navbar_opcao = "curso";
$curso_id = $_GET['id'];    
?>

<div class="container-fluid">
  <div class="row">
    
    <?php include_once("dashboard_sidebar.php");?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
 <div class="row">
   <div class="col-md-12">
     <?php 
      $query = mysqli_query($conexao, "SELECT nome FROM curso WHERE id = $curso_id");

      $curso = mysqli_fetch_array($query); 
     ?>
     
     <h4><?php echo $curso['nome'] ?></h4>
   </div>
 </div>
  <div class="row">
    <div class="col-md-6">
      <h5>Alunos</h5>
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
      <h5>Professores</h5>
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

      <form action="adiciona_professor_curso.php" class="form form-horizontal" method="post">
        <div class="form-group">
          <label for="professor" class="control-label col-sm-2">Professor</label>
          <div class="col-sm-7">
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

<?php include_once("footer_admin.php"); ?>
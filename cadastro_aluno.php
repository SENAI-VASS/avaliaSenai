<?php include_once("header.php");
      include_once("conexao.php");
?>

<div class="container">

  <form class="form-horizontal" action="grava_aluno.php" method="post">
   
    <div class="form-group">
      <label for="nome" class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
      </div>
    </div>
    
    <div class="form-group">
      <label for="matricula" class="col-sm-2 control-label">Matrícula</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Matrícula">
      </div>
    </div>
    
      <div class="form-group">
          <label for="matricula" class="col-sm-2 control-label">Senha</label>
          <div class="col-sm-10">
              <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
          </div>
      </div>
    
    <div class="form-group">
      <label for="curso" class="col-sm-2 control-label">Curso</label>
      <div class="col-sm-10">
        <select name="curso" id="curso" class="form-control">
          <?php

          $query = mysqli_query($conexao, "SELECT * FROM curso WHERE encerramento > CURRENT_DATE() ORDER BY nome ASC"); //Mostra apenas cursos cuja data de termino ainda não foram alcançadas em ordem alfabética ASCENDENTE

          while($curso = mysqli_fetch_array($query)){ ?>
          
          <option value="<?php echo $curso["id"] ?>"><?php echo $curso["nome"] ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
    
  </form>
</div>

<?php include_once( "footer.php");?>
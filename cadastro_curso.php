<?php include_once( "header.php");
      include_once("conexao.php");
?>

<div class="container">

  <form class="form-horizontal" action="grava_curso.php" method="post">
    <div class="form-group">
      <label for="nome" class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do curso">
      </div>
    </div>

    <div class="form-group">
      <label for="codigo" class="col-sm-2 control-label">Código</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="2014000">
      </div>
    </div>

    <div class="form-group">
      <label for="termino" class="col-sm-2 control-label">Término</label>
      <div class="col-sm-2">
        <select name="encerramento_dia" class="form-control" id="termino">
          <?php for($i=1 ; $i<=31; $i++){ if($i <=9 ){ $dia="0" .$i; }else{ $dia=$i; } ?>

          <option value="<?php echo $dia ?>">
            <?php echo $dia ?>
          </option>

          <?php } ?>
        </select>
      </div>
      <div class="col-sm-2">
        <select name="encerramento_mes" class="form-control">

          <?php $meses=[ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]; 

          for($i=0 ; $i <=11; $i++){ 
            if($i <= 9 ){ 
              $num_mes = "0".($i+1); 
              $nome_mes = $meses[$i]; 
            }else{ 
              $num_mes = $i+1;
              $nome_mes = $meses[$i];
            } ?>
            
          <option value="<?php echo $num_mes ?>">
            <?php echo $nome_mes ?>
          </option>
          <?php } ?>


        </select>
      </div>
      <div class="col-sm-2">
        <select name="encerramento_ano" class="form-control">
          <?php for($ano=2014 ; $ano<=2034; $ano++){ ?>

          <option value="<?php echo $ano ?>">
            <?php echo $ano ?>
          </option>

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
  
  <table class="table">
        <th>Nome</th>
        <th>Código</th>  
        <th>Data de término</th>
        
        <tbody>
    
        <?php
            $limite = 10; //numero de registros por página
            if( isset($_GET['pag']) ){
                $pagina = $_GET['pag']; //se a variavel pag da url conter algo
            }else{
                $pagina = 1; // se a variavel pag da url estiver vazia ou não existir
            }

            $inicio = ($pagina * $limite) - $limite;

            $query = mysqli_query($conexao, "SELECT * FROM curso ORDER BY encerramento DESC LIMIT $inicio, $limite ");

            while( $curso = mysqli_fetch_array($query) ){ ?>

                <tr>
                    <td><a href="detalhe_curso.php?id=<?php echo $curso['id'] ?>"><?php echo $curso["nome"]?></a></td>
                    <td><?php echo $curso["codigo"]?></td>
                    <td><?php echo $curso["encerramento"]?></td>
                </tr>

        <?php } ?>
        
        </tbody>
        
    </table>
    
    <div class="row">
      <div class="col-md-12">
        <ul class="pagination">
          <?php
            $query = "SELECT codigo FROM curso";
            
            $sql = mysqli_query($conexao, $query);

            $numlinhas = mysqli_num_rows($sql);

            $numpaginas = Ceil($numlinhas / $limite);

            for($pag = 1; $pag <= $numpaginas; $pag++){ ?>
            
            <li>
              <a href="cadastro_curso.php?pag=<?php echo $pag?>"><?php echo $pag ?></a>
            </li>
            
          <?php } ?>
        </ul>
      </div>
    </div>
    
    
</div>

<?php include_once( "footer.php");?>
<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php");

$navbar_opcao = "curso";?>

<div class="container-fluid">
  <div class="row">
    
    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <table class="table">
        <th>Curso</th>
        <th>Código</th>  
        <th>Data de término</th>
        <th></th>
        
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
                    <td><a href="gerencia_curso.php?id=<?php echo $curso['id'] ?>">Gerenciar</a></td>
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
              <a href="dashboard_curso.php?pag=<?php echo $pag?>"><?php echo $pag ?></a>
            </li>
            
          <?php } ?>
        </ul>
      </div>
    </div>
    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
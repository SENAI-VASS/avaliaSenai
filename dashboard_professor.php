<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php");

$navbar_opcao = "professor";?>

<div class="container-fluid">
  <div class="row">
    
    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">     
       
       <table class="table">
        <th>Nome</th>
        
        <tbody>
    
        <?php
            $limite = 20; //numero de registros por página
            if( isset($_GET['pag']) ){
                $pagina = $_GET['pag']; //se a variavel pag da url conter algo
            }else{
                $pagina = 1; // se a variavel pag da url estiver vazia ou não existir
            }

            $inicio = ($pagina * $limite) - $limite;

            $query = mysqli_query($conexao, "SELECT * FROM professor ORDER BY nome ASC LIMIT $inicio, $limite ");

            while( $professor = mysqli_fetch_array($query) ){ ?>

                <tr>
                    <td><a href="dashboard_visaogeral_professor.php?id=<?php echo $professor['id'] ?>"><?php echo $professor["nome"]?></a></td>
                    
                </tr>

        <?php } ?>
        
        </tbody>
        
    </table>
    
    <div class="row">
      <div class="col-md-12">
        <ul class="pagination">
          <?php
            $query = "SELECT id FROM professor";
            
            $sql = mysqli_query($conexao, $query);

            $numlinhas = mysqli_num_rows($sql);

            $numpaginas = Ceil($numlinhas / $limite);

            for($pag = 1; $pag <= $numpaginas; $pag++){ ?>
            
            <li>
              <a href="dashboard_professor.php?pag=<?php echo $pag?>"><?php echo $pag ?></a>
            </li>
            
          <?php } ?>
        </ul>
      </div>
    </div>
    </div>
  </div>

</div>

<?php include_once("footer_admin.php"); ?>
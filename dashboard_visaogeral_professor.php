<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php"); include_once("funcoes.php");

$navbar_opcao = "professor";
$prof_id = $_GET["id"];


$query = mysqli_query($conexao, "SELECT * FROM professor WHERE id = $prof_id");

$professor = mysqli_fetch_array($query);
?>

<div class="container-fluid">
  <div class="row">
    
    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">     
       <div class="row">
         <div class="col-md-12">
           <h4><?php echo $professor['nome'] ?></h4>
         </div>
       </div>
       <div class="row">
        <div class="col-md-4">
          <h3>Pontualidade</h3>
          <h1><?php obterMediaGeralProfessor('pontualidade'); ?></h1>
        </div>
        
        <div class="col-md-4">
          <h3>Frequência</h3>
          <h1><?php obterMediaGeralProfessor('frequencia'); ?></h1>
        </div>
        
        <div class="col-md-4">
          <h3>Domínio da disciplina</h3>
          <h1><?php obterMediaGeralProfessor('dominioDaDisciplina'); ?></h1>
        </div>
        
        <div class="col-md-4">
          <h3>Clareza na explicação</h3>
          <h1><?php obterMediaGeralProfessor('clarezaNaExplicacao'); ?></h1>
        </div>
        
        <div class="col-md-4">
          <h3>Habilidade em estimular alunos</h3>
          <h1><?php obterMediaGeralProfessor('habilidadeDeEstimularAlunos'); ?></h1>
        </div>
        
        <div class="col-md-4">
          <h3>Instrumentos de Avaliação</h3>
          <h1><?php obterMediaGeralProfessor('instrumentosDeAvaliacao'); ?></h1>
        </div>
      </div>


       
       
       <table class="table">
        <th>Curso</th>
        
        <tbody>
    
        <?php
            $limite = 20; //numero de registros por página
            if( isset($_GET['pag']) ){
                $pagina = $_GET['pag']; //se a variavel pag da url conter algo
            }else{
                $pagina = 1; // se a variavel pag da url estiver vazia ou não existir
            }

            $inicio = ($pagina * $limite) - $limite;

            $query = mysqli_query($conexao, "SELECT * FROM cursoTemProfessor WHERE profId = $prof_id LIMIT $inicio, $limite ");

            while( $result = mysqli_fetch_array($query) ){
              
              $curso_id = $result['cursoId'];
              
              $query2 = mysqli_query($conexao, "SELECT * FROM curso WHERE id = $curso_id "); 
              
              $curso = mysqli_fetch_array($query2); ?>
              
                <tr>
                    <td><a href="detalhe_professor.php?curso=<?php echo $curso['id'] ?>&prof=<?php echo $prof_id ?>"><?php echo $curso["nome"]?></a></td>
                    
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
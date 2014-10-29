<?php include_once("header_admin.php"); include_once("conexao.php"); 
include_once("seguranca_admin.php");

$navbar_opcao = ""?>

<div class="container-fluid">
  <div class="row">

    <?php include_once("dashboard_sidebar.php") ?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

      <form class="form-horizontal" action="grava_administrador.php" method="post">
        <div class="form-group">
          <label for="nome" class="col-sm-2 control-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
          </div>
        </div>
        
        <div class="form-group">
          <label for="senha" class="col-sm-2 control-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
        
      </form>
      
      <div class="row">
        <div class="col-md-12">
          <h4>Lista de administradores</h4>
        </div>
      </div>

      <table class="table">
        <th>Nome</th>
        <th>Email</th>
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

$query = mysqli_query($conexao, "SELECT * FROM administrador ORDER BY nome ASC LIMIT $inicio, $limite ");

while( $administrador = mysqli_fetch_array($query) ){ ?>

          <tr>
            <td><?php echo $administrador["nome"]?></td>
            <td><?php echo $administrador["email"]?></td>
            <td><a href="remove_administrador.php?id=<?php echo $administrador['id'] ?>"><i class="fa fa-trash-o"> Remover</i></a></td>
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
  </div>

</div>

<?php include_once("footer_admin.php");?>






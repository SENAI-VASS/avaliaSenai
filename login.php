<?php 
include_once("header.php");
include_once("conexao.php");?>

<div class="container">
    
    <form class="form-horizontal" role="form" action="entrar.php" method="post">
        <div class="form-group">
            <label for="matricula" class="col-sm-2 control-label">Matrícula</label>
            <div class="col-sm-2">
                <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matrícula">
            </div>
        </div>
        <div class="form-group">
            <label for="senha" class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-2">
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </div>
    </form>
    
</div>

<?php include_once("footer.php");?>




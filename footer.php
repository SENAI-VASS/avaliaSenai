<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        Desenvolvido pela primeira turma de Progrador Web do SENAI
      </div>
      <div class="col-md-2">
        <a href="" data-toggle="modal" data-target="#login_admin">Administração</a>
      </div>
    </div>
  </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="login_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Acessar área administrativa</h4>
      </div>
      <div class="modal-body">

        <form action="entrar_admin.php" class="form-horizontal" method="post">

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


          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Entrar</button>

          </form>
      </div>

    </div>

  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php include_once( "header.php"); ?>

<div class="container">
  <form class="form-avaliacao">
    <div class="row">
      <h2>Carga horária</h2>
    </div>

    <div class="row">
      <div class="col-md-2">
        <input type="radio" name="carga_horaria" id="carga_horaria1" value="5">
        <label for="carga_horaria1">Excelente</label>
      </div>
      <div class="col-md-10">
        <div class="descricao">A carga horária superou minhas expectativas</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        <input type="radio" name="carga_horaria" id="carga_horaria2" value="5">
        <label for="carga_horaria2">Excelente</label>
      </div>
      <div class="col-md-10">
        <div class="descricao">A carga horária superou minhas expectativas</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        <input type="radio" name="carga_horaria" id="carga_horaria3" value="5"><label for="carga_horaria3">Excelente</label>
      </div>
      <div class="col-md-10">
        <div class="descricao">A carga horária superou minhas expectativas</div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        <input type="radio" name="carga_horaria" id="carga_horaria4" value="5"><label for="carga_horaria4">Excelente</label>
      </div>
      <div class="col-md-10">
        <div class="descricao">A carga horária superou minhas expectativas</div>
      </div>
    </div>
    
     <div class="row">
      <div class="col-md-2">
        <input type="radio" name="carga_horaria" id="carga_horaria5" value="5"><label for="carga_horaria5">Excelente</label>
      </div>
      <div class="col-md-10">
        <div class="descricao">A carga horária superou minhas expectativas</div>
      </div>
    </div>


<div class="form-group">
  <h2>Grade</h2>
  <table>
    <tr>
      <td>
        <input type="radio" name="grade" value="5">Excelente</td>
      <td>A grade superou minhas expectativas</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="4">Bom</td>
      <td>A grade atendeu as minhas expectativas</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="3">Regular</td>
      <td>A grade antendeu, porém um pouco mais não seria ruim</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="2">Ruim</td>
      <td>Descrição para ruim</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="1">Péssimo</td>
      <td>Descrição para péssimo</td>
    </tr>
  </table>
</div>

<div class="form-group">
  <h2>Atividades práticas</h2>
  <table>
    <tr>
      <td>
        <input type="radio" name="grade" value="5">Excelente</td>
      <td>As atividades práticas superaram minhas expectativas</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="4">Bom</td>
      <td>As atividades práticas atenderam as minhas expectativas</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="3">Regular</td>
      <td>As atividades práticas atenderam minhas expectativas, porém um pouco mais não seria ruim</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="2">Ruim</td>
      <td>Descrição para ruim</td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="grade" value="1">Péssimo</td>
      <td>Descrição para péssimo</td>
    </tr>
  </table>
</div>

<div class="form-group">
  <h3>Comentário</h3>
  <textarea class="form-control"></textarea>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Concluir</button>
</div>

</form>
</div>


<?php include_once( "footer.php"); ?>
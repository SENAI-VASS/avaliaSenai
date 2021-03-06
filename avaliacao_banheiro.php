 <?php include_once( "header.php");
  include_once("seguranca.php");
  ?>

<div class="container">
 
 <div class="row">
   <div class="col-md-12">
     <h3>Banheiros</h3>
   </div>
 </div>
  <form class="form-avaliacao" action="grava_avaliacao.php" method="post">
  
    <div class="form-group"><!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Acessibilidade<small> O acesso ao banheiro é facilitado a qualquer tipo de pessoa?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade1" value="5">
          <label for="acessibilidade1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É de fácil acesso a qualquer público e bem localizado.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade2" value="4">
          <label for="acessibilidade2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É bem localizado.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade3" value="3">
          <label for="acessibilidade3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É bem localizado. Porém, não é acessível a qualquer público.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade4" value="2">
          <label for="acessibilidade4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É mal localizado.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade5" value="1">
          <label for="acessibilidade5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É mal localizado e de díficil acesso.</div>
        </div>
      </div>
    </div>   

  <div class="form-group"><!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Limpeza<small> O banheiro se encontra bem higienizado?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza1" value="5">
          <label for="limpeza1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Se encontra bem limpo e higienizado.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza2" value="4">
          <label for="limpeza2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Se encontra limpo.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza3" value="3">
          <label for="limpeza3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Se encontra limpo. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza4" value="2">
          <label for="limpeza4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Não se encontra limpo.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza5" value="1">
          <label for="limpeza5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Se encontra em condições impróprias para uso.</div>
        </div>
      </div>
    </div> 

  <div class="form-group"><!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Material de higiene<small> Os materias de higiene são de boa qualidade?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="materialHigiene" id="materialHigiene1" value="5">
          <label for="materialHigiene1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">São de ótima qualidade.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="materialHigiene" id="materialHigiene2" value="4">
          <label for="materialHigiene2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">São ideais para uso.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="materialHigiene" id="materialHigiene3" value="3">
          <label for="materialHigiene3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">São de qualidade regular.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="materialHigiene" id="materialHigiene4" value="2">
          <label for="materialHigiene4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Não são de boa qualidade.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="materialHigiene" id="materialHigiene5" value="1">
          <label for="materialHigiene5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">São de péssima qualidade.</div>
        </div>
      </div>
    </div> 

  <div class="form-group"><!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Quantidade de banheiros<small> A quantidade de banheiros é suficiente para todos?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="quantidade" id="quantidade1" value="5">
          <label for="quantidade1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Há mais do que o suficiente.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="quantidade" id="quantidade2" value="4">
          <label for="quantidade2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Há uma quantidade suficiente.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="quantidade" id="quantidade3" value="3">
          <label for="quantidade3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Há uma quantidade suficiente. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="quantidade" id="quantidade4" value="2">
          <label for="quantidade4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A quantidade de banheiros não atende a todos.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="quantidade" id="quantidade5" value="1">
          <label for="quantidade5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Não há banheiros suficientes para todos.</div>
        </div>
      </div>
    </div> 	
    	

    <div class="form-group">
      <h3>Comentário</h3>
      <textarea class="form-control" name="comentario"></textarea>
    </div>
	
	<input type="hidden" name="avaliacao" value="banheiro">
	
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Concluir</button>
    </div>

  </form>
</div>


<?php include_once( "footer.php"); ?>
<?php include_once( "header.php"); include_once("seguranca.php");?>

<div class="container">
 <div class="row">
   <div class="col-md-12">
     <h3>Biblioteca</h3>
   </div>
 </div>
  <form class="form-avaliacao">

    <div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Acessibilidade <small>Existem facilitadores para portadores de necessidades especiais ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade1" value="5">
          <label for="acessibilidade1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a acessibilidade da biblioteca.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade2" value="4">
          <label for="acessibilidade2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a acessibilidade da biblioteca.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade3" value="3">
          <label for="acessibilidade3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a acessibilidade. Porém, não seria mal  se a mesma melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade4" value="2">
          <label for="acessibilidade4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A acessibilidade deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade5" value="1">
          <label for="acessibilidade5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A acessibilidade deixou muito a desejar.</div>
        </div>
      </div>
    </div>


<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Acervo <small>O que você acha do nosso acervo ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acervo" id="acervo1" value="5">
          <label for="acervo1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com o acervo.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acervo" id="acervo2" value="4">
          <label for="acervo2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o acervo</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acervo" id="acervo3" value="3">
          <label for="acervo3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o acervo, Porém, não seria mal se o mesmo melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acervo" id="acervo4" value="2">
          <label for="acervo4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O acervo deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acervo" id="acervo5" value="1">
          <label for="acervo5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O acervo deixou muito a desejar.</div>
        </div>
      </div>
    </div>    
	
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Espaço fisico <small>O que você acha do espaço fisica da biblioteca ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico1" value="5">
          <label for="espaco_fisico1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com o espaço fisico.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico2" value="4">
          <label for="espaco_fisico2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o espaço fisico.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico3" value="3">
          <label for="espaco_fisico3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico4" value="2">
          <label for="espaco_fisico4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O espaço fisico deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico5" value="1">
          <label for="espaco_fisico5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O espaço fisico deixou muito a desejar.</div>
        </div>
      </div>
    </div>
	
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Limpeza <small>O que você acha da limpeza ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza1" value="5">
          <label for="limpeza1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a limpeza.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza2" value="4">
          <label for="limpeza2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a limpeza.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza3" value="3">
          <label for="limpeza3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza4" value="2">
          <label for="limpeza4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A limpeza deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza5" value="1">
          <label for="limpeza5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A limpeza deixou muito a desejar.</div>
        </div>
      </div>
    </div>
	
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Equipamentos <small>O que você acha dos equipamentos ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="equipamento" id="equipamento1" value="5">
          <label for="equipamento1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com os equipamentos.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="equipamento" id="equipamento2" value="4">
          <label for="equipamento2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com os equipamentos.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="equipamento" id="equipamento3" value="3">
          <label for="equipamento3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="equipamento" id="equipamento4" value="2">
          <label for="equipamento4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Os equipamentos deixaram a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="equipamento" id="equipamento5" value="1">
          <label for="equipamento5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Os equipamentos deixaram muito a desejar.</div>
        </div>
      </div>
    </div>
	
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Climatização <small>O que você acha da climatização ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao1" value="5">
          <label for="climatizacao1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a climatização.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao2" value="4">
          <label for="climatizacao2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a climatização.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao3" value="3">
          <label for="climatizacao3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao4" value="2">
          <label for="climatizacao4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A climatização deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao5" value="1">
          <label for="climatizacao5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A climatização deixou muito a desejar.</div>
        </div>
      </div>
    </div>
	
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Iluminação <small>O que você acha da iluminação ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao1" value="5">
          <label for="iluminacao1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a iluminação.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao2" value="4">
          <label for="iluminacao2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a iluminação.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao3" value="3">
          <label for="iluminacao3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao4" value="2">
          <label for="iluminacao4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A iluminação deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao5" value="1">
          <label for="iluminacao5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A iluminação deixou muito a desejar.</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <h3>Comentário</h3>
      <textarea class="form-control"></textarea>
    </div>
    
    <input type="hidden" name="avaliacao" value="biblioteca">

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Concluir</button>
    </div>

  </form>
</div>


<?php include_once( "footer.php"); ?>
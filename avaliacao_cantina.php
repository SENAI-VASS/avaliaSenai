    <?php include_once("header.php"); include_once("seguranca.php");?>

<div class="container">
 <div class="row">
   <div class="col-md-12">
     <h3>Cantina</h3>
   </div>
 </div>
    <form class="form-avaliacao" action="grava_avaliacao.php" method="post">

	<div class="form-group"><!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Acessibilidade <small>Como está a acessibilidade?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade1" value="5">
          <label for="acessibilidade1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a acessibilidade.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade2" value="4">
          <label for="acessibilidade2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a acessibilidade.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade3" value="3">
          <label for="acessibilidade3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade4" value="2">
          <label for="acessibilidade4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A acessibilidade deixa a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade5" value="1">
          <label for="acessibilidade5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A acessibilidade deixa muito a desejar.</div>
        </div>
      </div>
    </div>   
	

	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Variedades <small>O que acha da variedade de produtos?</small></h3>
        </div>
      </div>
 
      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="variedades" id="variedades1" value="5">
          <label for="variedades1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a variedade de produtos.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="variedades" id="variedades2" value="4">
          <label for="variedades2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a variedade de produtos.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="variedades" id="variedades3" value="3">
          <label for="variedades3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="variedades" id="variedades4" value="2">
          <label for="variedades4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">São poucas as variedades.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="variedades" id="variedades5" value="1">
          <label for="variedades5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">São muito poucas as variedades.</div>
        </div>
      </div>
    </div>    
	
		
	
	
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Preços <small>Como estão os preços?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="precos"  id="precos1" value="5">
          <label for="precos1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com os preços.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="precos" id="precos2" value="4">
          <label for="precos2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com os preços.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="precos" id="precos3" value="3">
          <label for="precos3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com os preços. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="precos" id="precos4" value="2">
          <label for="precos4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com os preços.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="precos" id="precos5" value="1">
          <label for="precos5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com os preços.</div>
        </div>
      </div>
    </div>    
	
		
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Atendimento <small>Como está o atendimento?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Atendimento" id="Atendimento1" value="5">
          <label for="Atendimento1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com o atendimento.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Atendimento" id="Atendimento2" value="4">
          <label for="Atendimento2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o atendimento.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Atendimento" id="Atendimento3" value="3">
          <label for="Atendimento3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Atendimento" id="Atendimento4" value="2">
          <label for="Atendimento4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O atendimento deixá a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Atendimento" id="Atendimento5" value="1">
          <label for="Atendimento5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O atendimento deixá muito a desejar.</div>
        </div>
      </div>
    </div>    
	
		
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Horário de  Funcionamento <small>Como está o horário de funcionamento ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Horario_de_Funcionamento" id="Horario_de_Funcionamento1" value="5">
          <label for="Horario_de_Funcionamento1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com o horáriorio de funcionamento.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Horario_de_Funcionamento" id="Horario_de_Funcionamento2" value="4">
          <label for="Horario_de_Funcionamento2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o horário de funcionamento.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Horario_de_Funcionamento" id="Horario_de_Funcionamento3" value="3">
          <label for="Horario_de_Funcionamento3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito. Porém, não seria mal se melhorasse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Horario_de_Funcionamento" id="Horario_de_Funcionamento4" value="2">
          <label for="Horario_de_Funcionamento4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Horário de funcionamneto deixou a desejar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Horário_de_Funcionamento" id="Horário_de_Funcionamento5" value="1">
          <label for="Horário_de_Funcionamento5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Horário de funcionamento deixou muito a desejar.</div>
        </div>
      </div>
    </div>    
	
		
	
	<div class="form-group">

      <div class="row">
        <div class="col-md-12">
          <h3>Limpeza <small>O que achá da limpeza ?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Limpeza" id="Limpeza1" value="5">
          <label for="Limpeza1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a limpeza.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Limpeza" id="Limpeza2" value="4">
          <label for="Limpeza2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a  limpeza.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Limpeza" id="Limpeza3" value="3">
          <label for="Limpeza3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a limpeza. Porém precisa melhorar.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Limpeza" id="Limpeza4" value="2">
          <label for="Limpeza4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A limpeza é insuficiente.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="Limpeza" id="Limpeza5" value="1">
          <label for="Limpeza5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">A limpeza é extremamente insuficiente.</div>
        </div>
      </div>
    </div>    
	
		<div class="form-group">　
            <h3>Comentário</h3>
            <textarea name="comentario" class="form-control"></textarea>
        </div>
        
        <input type="hidden" name="avaliacao" value="cantina">

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Concluir</button>
        </div>

    </form>
</div>


<?php include_once( "footer.php"); ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
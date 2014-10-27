<?php include_once("header.php"); include_once("seguranca.php"); ?>

<div class="container">
 <div class="row">
   <div class="col-md-12">
     <h3>Laboratórios</h3>
   </div>
 </div>
  <form class="form-avaliacao">

    <!-- ACESSIBILIDADE -->
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <h3>Acessibilidade <small>Os laboratórios são acessíveis?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade1" value="5">
          <label for="acessibilidade1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a acessibilidade dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade2" value="4">
          <label for="acessibilidade2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a acessibilidade dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade3" value="3">
          <label for="acessibilidade3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a acessibilidade dos laboratórios. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade4" value="2">
          <label for="acessibilidade4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com a acessibilidade dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="acessibilidade" id="acessibilidade5" value="1">
          <label for="acessibilidade5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com a acessibilidade dos laboratórios.</div>
        </div>
      </div>
    </div>

    <!-- ACESSIBILIDADE -->

    <!-- ESPAÇO FÍSICO -->
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <h3>Espaço físico <small>O espaço físico dos laboratórios é suficiente?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico1" value="5">
          <label for="espaco_fisico1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com o espaço físico dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico2" value="4">
          <label for="espaco_fisico2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o espaço físico dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico3" value="3">
          <label for="espaco_fisico3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com o espaço físico dos laboratórios. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico4" value="2">
          <label for="espaco_fisico4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com o espaço físico dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="espaco_fisico" id="espaco_fisico5" value="1">
          <label for="espaco_fisico5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com o espaço físico dos laboratórios.</div>
        </div>
      </div>
    </div>
    <!-- ESPAÇO FÍSICO -->

    <!-- LIMPEZA -->
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <h3>Limpeza <small>Os laboratórios são bem limpos?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza1" value="5">
          <label for="limpeza1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a limpeza dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza2" value="4">
          <label for="limpeza2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a limpeza dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza3" value="3">
          <label for="limpeza3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a limpeza dos laboratórios. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza4" value="2">
          <label for="limpeza4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com a limpeza dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="limpeza" id="limpeza5" value="1">
          <label for="limpeza5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com a limpeza dos laboratórios.</div>
        </div>
      </div>
    </div>
    <!-- LIMPEZA -->

    <!-- RECURSOS -->
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <h3>Recursos <small>Os recursos dos laboratórios são suficientes?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="recursos" id="recursos1" value="5">
          <label for="recursos1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com os recursos dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="recursos" id="recursos2" value="4">
          <label for="recursos2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com os recursos dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="recursos" id="recursos3" value="3">
          <label for="recursos3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com os recursos dos laboratórios. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="recursos" id="recursos4" value="2">
          <label for="recursos4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com os recursos dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="recursos" id="recursos5" value="1">
          <label for="recursos5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com os recursos dos laboratórios.</div>
        </div>
      </div>
    </div>
    <!-- RECURSOS -->

    <!-- CLIMATIZAÇÃO -->
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <h3>Climatização <small>Os laboratórios são bem climatizados?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao1" value="5">
          <label for="climatizacao1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a climatização dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao2" value="4">
          <label for="climatizacao2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a climatização dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao3" value="3">
          <label for="climatizacao3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a climatização dos laboratórios. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao4" value="2">
          <label for="climatizacao4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com a climatização dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="climatizacao" id="climatizacao5" value="1">
          <label for="climatizacao5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com a climatização dos laboratórios.</div>
        </div>
      </div>
    </div>
    <!-- CLIMATIZAÇÃO -->

    <!-- ILUMINAÇÃO -->
    <div class="form-group">
      <div class="row">
        <div class="col-md-12">
          <h3>Iluminação <small>Os laboratórios possuem boa iluminação?</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao1" value="5">
          <label for="iluminacao1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito satisfeito com a iluminação dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao2" value="4">
          <label for="iluminacao2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a iluminação dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao3" value="3">
          <label for="iluminacao3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou satisfeito com a iluminação dos laboratórios. Porém, poderia ser melhor.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao4" value="2">
          <label for="iluminacao4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou insatisfeito com a iluminação dos laboratórios.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="iluminacao" id="iluminacao5" value="1">
          <label for="iluminacao5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Estou muito insatisfeito com a iluminação dos laboratórios.</div>
        </div>
      </div>
    </div>
    <!-- ILUMINAÇÃO -->

    <!-- COMENTÁRIO -->
    <div class="form-group">
      <h3>Comentário</h3>
      <textarea class="form-control"></textarea>
    </div>
    
    <input type="hidden" name="avaliacao" value="laboratorio">
    <!-- COMENTÁRIO -->

    <!-- BOTÃO CONCLUIR -->
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Concluir</button>
    </div>
    <!-- BOTÃO CONCLUIR -->

  </form>
</div>

<?php include_once( "footer.php"); ?>
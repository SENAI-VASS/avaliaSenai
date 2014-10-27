<?php include_once("header.php"); include_once("seguranca.php"); include_once("conexao.php");

  $prof_id = $_GET['id'];

  $query = mysqli_query($conexao, "SELECT * FROM professor WHERE id = $prof_id");

  $professor = mysqli_fetch_array($query);

?>

<div class="container">
 <div class="row">
   <div class="col-md-12">
     <h3>Professor <?php echo $professor['nome'] ?></h3>
   </div>
 </div>
  <form class="form-avaliacao">

    <div class="form-group">
      <!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Frequência <small>Comparecimento do professor nas aulas</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="frequencia" id="frequencia1" value="5">
          <label for="frequencia1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Nunca falta.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="frequencia" id="frequencia2" value="4">
          <label for="frequencia2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Raramente falta.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="frequencia" id="frequencia3" value="3">
          <label for="frequencia3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Às vezes falta.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="frequencia" id="frequencia4" value="2">
          <label for="frequencia4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Falta periódicamente.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="frequencia" id="frequencia5" value="1">
          <label for="frequencia5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Falta muito, mais do que o tolerável.</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Pontualidade <small>Pontualidade do professor em relação ao horário</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="pontualidade" id="pontualidade1" value="5">
          <label for="pontualidade1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É sempre pontual.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="pontualidade" id="pontualidade2" value="4">
          <label for="pontualidade2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Geralmente é pontual.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="pontualidade" id="pontualidade3" value="3">
          <label for="pontualidade3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Nem sempre é pontual.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="pontualidade" id="pontualidade4" value="2">
          <label for="pontualidade4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Raramente é pontual.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="pontualidade" id="pontualidade5" value="1">
          <label for="pontualidade5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Nunca é pontual.</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <!-- Copie este bloco para adicionar mais critérios-->


      <div class="row">
        <div class="col-md-12">
          <h3>Domínio da disciplina <small>Domínio de conteúdo da disciplina do professor</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="dominio_da_disciplina" id="dominio_da_disciplina1" value="5">
          <label for="dominio_da_disciplina1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O professor domina plenamente a disciplina.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="dominio_da_disciplina" id="dominio_da_disciplina2" value="4">
          <label for="dominio_da_disciplina2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O professor tem bom domínio da disciplina.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="dominio_da_disciplina" id="dominio_da_disciplina3" value="3">
          <label for="dominio_da_disciplina3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O professor tem razoável domínio disciplina.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="dominio_da_disciplina" id="dominio_da_disciplina4" value="2">
          <label for="dominio_da_disciplina4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O professor tem baixo domínio da disciplina.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="dominio_da_disciplina" id="dominio_da_disciplina5" value="1">
          <label for="dominio_da_disciplina5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">O professor não tem domínio da disciplina.</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <!-- Copie este bloco para adicionar mais critérios-->


      <div class="row">
        <div class="col-md-12">
          <h3>Clareza na explicação <small>Explicações de fácil entendimento para os alunos</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="clareza_na_explicacao" id="clareza_na_explicacao1" value="5">
          <label for="clareza_na_explicacao1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Clareza excepcional nas explicações.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="clareza_na_explicacao" id="clareza_na_explicacao2" value="4">
          <label for="clareza_na_explicacao2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Boa clareza nas explicações.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="clareza_na_explicacao" id="clareza_na_explicacao3" value="3">
          <label for="clareza_na_explicacao3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Apresenta bem, porém à vezes confusas as explicações.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="clareza_na_explicacao" id="clareza_na_explicacao4" value="2">
          <label for="clareza_na_explicacao4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Apresenta geralmente de forma confusa as explicações.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="clareza_na_explicacao" id="clareza_na_explicacao5" value="1">
          <label for="clareza_na_explicacao5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Apresenta de forma extremamente confusa as explicações.</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <!-- Copie este bloco para adicionar mais critérios-->


      <div class="row">
        <div class="col-md-12">
          <h3>Habilidade de estimular os alunos <small> Metodologia didática aplicada na disciplina</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="habilidade_de_estimular_alunos" id="habilidade_de_estimular_alunos1" value="5">
          <label for="habilidade_de_estimular_alunos1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É adequada, interativa e desperta interesse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="habilidade_de_estimular_alunos" id="habilidade_de_estimular_alunos2" value="4">
          <label for="habilidade_de_estimular_alunos2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É relativamente apropriada, pouco interativa e desperta um pouco de interesse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="habilidade_de_estimular_alunos" id="habilidade_de_estimular_alunos3" value="3">
          <label for="habilidade_de_estimular_alunos3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">É pouco apropriada, pouco interativa e não desperta interesse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="habilidade_de_estimular_alunos" id="habilidade_de_estimular_alunos4" value="2">
          <label for="habilidade_de_estimular_alunos4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Não é apropriada, nem interativa e não desperta interesse.</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="habilidade_de_estimular_alunos" id="habilidade_de_estimular_alunos5" value="1">
          <label for="habilidade_de_estimular_alunos5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Não possui nenhuma habilidade para estimular os alunos.</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <!-- Copie este bloco para adicionar mais critérios-->

      <div class="row">
        <div class="col-md-12">
          <h3>Intrumento de avaliação <small>Aplicação de tarefas, trabalhos e provas</small></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="instrumentos_de_avaliacao" id="instrumentos_de_avaliacao1" value="5">
          <label for="instrumentos_de_avaliacao1">Excelente</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Descrição</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="instrumentos_de_avaliacao" id="instrumentos_de_avaliacao2" value="4">
          <label for="instrumentos_de_avaliacao2">Bom</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Descrição</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="instrumentos_de_avaliacao" id="instrumentos_de_avaliacao3" value="3">
          <label for="instrumentos_de_avaliacao3">Regular</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Descrição</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="instrumentos_de_avaliacao" id="instrumentos_de_avaliacao4" value="2">
          <label for="instrumentos_de_avaliacao4">Ruim</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Descrição</div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <input type="radio" name="instrumentos_de_avaliacao" id="instrumentos_de_avaliacao5" value="1">
          <label for="instrumentos_de_avaliacao5">Péssimo</label>
        </div>
        <div class="col-md-10">
          <div class="descricao">Descrição</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <h3>Comentário</h3>
      <textarea class="form-control"></textarea>
    </div>
    
    <input type="hidden" name="avaliacao" value="professor">

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Concluir</button>
    </div>

  </form>
</div>


<?php include_once("footer.php"); ?>
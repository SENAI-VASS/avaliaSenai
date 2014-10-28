<?php include_once("header.php"); include_once("seguranca.php"); include_once("conexao.php");

$curso_id = $_SESSION['curso_id'];

$query = mysqli_query($conexao, "SELECT * FROM curso WHERE id = $curso_id ");

$curso = mysqli_fetch_array($query);

?>

<div class="container">
   
   <div class="row">
   <div class="col-md-12">
     <h3>Curso de <?php echo $curso['nome'] ?></h3>
   </div>
 </div>
   
    <form class="form-avaliacao" action="grava_avaliacao.php" method="post">

        <form class="form-avaliacao" action="grava_avaliacao.php" method="post">
            <!-- Copie este bloco para adicionar mais critérios-->

            <div class="row">
                <div class="col-md-12">
                    <h3>Carga horária <small>A quantidade total de horas do curso foi suficiente?</small></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="carga_horaria" id="carga_horaria1" value="5">
                    <label for="carga_horaria1">Excelente</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou muito satisfeito com a carga horária do curso.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="carga_horaria" id="carga_horaria2" value="4">
                    <label for="carga_horaria2">Bom</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou satisfeito com a carga horária do curso.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="carga_horaria" id="carga_horaria3" value="3">
                    <label for="carga_horaria3">Regular</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou satisfeito com a carga horária do curso. Porém, não faria mal se a mesma fosse um pouco mais longa.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="carga_horaria" id="carga_horaria4" value="2">
                    <label for="carga_horaria4">Ruim</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A carga horária foi insuficiente.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="carga_horaria" id="carga_horaria5" value="1">
                    <label for="carga_horaria5">Péssimo</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A carga horária foi extremamente curta.</div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <!-- Copie este bloco para adicionar mais critérios-->

            <div class="row">
                <div class="col-md-12">
                    <h3>Grade <small>O que achou do conteúdo do curso?</small> </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="grade" id="grade1" value="5">
                    <label for="grade1">Excelente</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A grade do curso superou minhas expectativas.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="grade" id="grade2" value="4">
                    <label for="grade2">Bom</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A grade do curso estava dentro de minhas expectativas.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="grade" id="grade3" value="3">
                    <label for="grade3">Regular</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A grade do curso estava dentro de minhas expectativas. Porém, acredito que alguns outros tópicos poderiam fazer parte da mesma.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="grade" id="grade4" value="2">
                    <label for="grade4">Ruim</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A grade do curso deixou a desejar.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="grade" id="grade5" value="1">
                    <label for="grade5">Péssimo</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">A grade do curso deixou muito a desejar.</div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <!-- Copie este bloco para adicionar mais critérios-->

            <div class="row">
                <div class="col-md-12">
                    <h3>Confiança <small>Se sente seguro para aplicar o que aprendeu no SENAI no mercado de trabalho?</small></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="confianca" id="confianca1" value="5">
                    <label for="confianca1">Excelente</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou muito confiante com o que aprendi.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="confianca" id="confianca2" value="4">
                    <label for="confianca2">Bom</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou confiante com que aprendi.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="confianca" id="confianca3" value="3">
                    <label for="confianca3">Regular</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou confiante com o que aprendi. Porém, poderia estar mais.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="confianca" id="confianca4" value="2">
                    <label for="confianca4">Ruim</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Não estou confiante com o que aprendi.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="confianca" id="confianca5" value="1">
                    <label for="confianca5">Péssimo</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Estou muito desconfiante com o que aprendi.</div>
                </div>
            </div>
        </div>

        <div class="form-group">　
            <h3>Comentário</h3>
            <textarea name="comentario" class="form-control"></textarea>
        </div>
        
        <input type="hidden" name="avaliacao" value="curso">

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Concluir</button>
        </div>

    </form>
</div>


<?php include_once( "footer.php"); ?>
<?php include_once( "header.php"); ?>

<div class="container">
    <form class="form-avaliacao">

        <div class="form-group">
            <!-- Copie este bloco para adicionar mais critérios-->

            <div class="row">
                <div class="col-md-12">
                    <h3>Carga horária</h3>
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
                    <h3>Grade</h3>
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
                    <h3>Aulas práticas</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="aulas_praticas" id="aulas_praticas1" value="5">
                    <label for="aulas_praticas1">Excelente</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Descrição</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="aulas_praticas" id="aulas_praticas2" value="4">
                    <label for="aulas_praticas2">Bom</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Descrição</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="aulas_praticas" id="aulas_praticas3" value="3">
                    <label for="aulas_praticas3">Regular</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Descrição</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="aulas_praticas" id="aulas_praticas4" value="2">
                    <label for="aulas_praticas4">Ruim</label>
                </div>
                <div class="col-md-10">
                    <div class="descricao">Descrição</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <input type="radio" name="aulas_praticas" id="aulas_praticas5" value="1">
                    <label for="aulas_praticas5">Péssimo</label>
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

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Concluir</button>
        </div>

    </form>
</div>


<?php include_once( "footer.php"); ?>
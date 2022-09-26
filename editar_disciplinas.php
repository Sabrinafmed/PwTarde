<?php include "cabecalho.php"; ?>

<?php

    $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/byid/".$_GET["id"]);
    $dados = json_decode($dados,true);

?>
<div class="row">
    <div class="col-4 offset-4">
        <form>
            <div class="form-group">
                <label>Nome da Disciplina</label>
                <input name="nome" class="form-control" value="<?php echo $dados["nome"]; ?>"/>

            </div>

            <div class="form-group">
                <label>Id da Disciplina</label>
                <input name="Id" class="form-control" value="<?php echo $dados["disciplinaId"]; ?>"/>

            </div>

            <div class="form-group">
                <label>Apelido</label>
                <input name="apelido" class="form-control" value="<?php echo $dados["apelido"]; ?>"/>

            </div>

            <div class="form-group">
                <label>Sigla</label>
                <input name="sigla" class="form-control" value="<?php echo $dados["sigla"]; ?>"/>

            </div>

            <div class="form-group mt-3">
                <button class="btn btn-succes">
                    Salvar

                </button>

            </div>

        </form>

    </div>
</div>


<?php include "rodape.php";?>
<?php include "cabecalho.php"; ?>

<h1>Lista de Usuários</h1>

<div class="card mt-4 mb-4">
    <div class="card-header bg-secondary text-white">Usúarios</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button class="btn btn-dark">Novo Usúario</button>

            </div>

            <div class="col-2">
                <select name="opcao" class="form-control">
                    <option selected="0" value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
                </select>

            </div>

            <div class="col-4">
                <input type="text" class="form-control" name="textoPesquisado" />

            </div>
            <div class="col-2">
                <button class="btn btn-secondary">Pesquisar</button>

            </div>
        </div>
    </div>
</div>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Cleo</td>
            <td>cleonice.oliveira@fatec.sp.gov.br</td>
            <td><a class="btn btn-dark">Editar</a> </td>
            <td><a class="btn btn-secondary">Excluir</a> </td>
        </tr>

        <?php
        for ($i = 0; $i < 10; $i++) {
        ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <td>Nome <?php echo $i; ?> </td>
                <td>Email <?php echo $i; ?> </td>
                <td><a class="btn btn-dark">Editar</a> </td>
                <td><a class="btn btn-secondary">Excluir</a> </td>
            </tr>

        <?php
        }

        ?>

    </tbody>
</table>

<?php include "rodape.php"; ?>
<?php include "cabecalho.php"; ?>

<h1>Lista de Clientes </h1>

<div class="card mt-4 mb-4 ">
    <div class="card-header bg-primary text-white"> Usuários </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button class="btn btn-success"> Novo Usuário </button>
            </div>
            <div class="col-2">
                <select name="opcao" class="form-control">
                    <option select value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
            </select>
            </div>  
            <div class="col-4">
                <input type="text" class="form-control" name="TextoPesquisado" />
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th >ID</th>
      <th >Nome</th>
      <th >Email</th>
      <th ></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>1</td>
      <td>Sabrina</td>
      <td>sabrina.medeiros5@faetc.sp.gov.br</td>
      <td><a class="btn btn-warning">  Editar  </a></td>
      <td><a class="btn btn-danger">   Excluir </a></td>
    </tr>

    <?php
    for ($i = 0; $i< 10; $i++)
    {
        ?>
          <tr>
      <td><?php echo $i; ?></td>
      <td>Nome <?php echo $i; ?></td>
      <td>Email@fatec.sp.gov.br<?php echo $i; ?></td>
      <td><a class="btn btn-warning">  Editar  </a></td>
      <td><a class="btn btn-danger">   Excluir </a></td>
    </tr>
    <?php
    }
?>
  </tbody>
</table>

<?php include "rodape.php"; ?>
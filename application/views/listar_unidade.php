
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <div class="col-md-1">
              <h1 class="h2">Unidades</h1>
            </div>
            <div class="col-md-8">
              <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Search">
            </div>
            <div class=" col-2 col-md-2">
              <a class="btn btn-primary btn-block" href="<?=base_url()?>unidade/cadastro">Nova Unidade</a>
            </div>

        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <table class="table table-striped">
          <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Nome Responsável</th>
            <th>Cidade</th>
            <th></th>
            <th></th>
          </tr>
          <?php foreach($unidade as $uni) {?>
          <tr>
            <td><?= $uni->nome_unidade?></td>
            <td><?= $uni->cnpj_unidade?></td>
            <td><?= $uni->nome_responsavel?></td>
            <td><?= $uni->municipio_unidade.' - '.$uni->estado_unidade?></td>

            <td>
              <a href="<?= base_url('unidade/editar/'.$uni->id_unidade)?>" class="btn btn-primary btn-group">Editar</a>
              <a href="<?= base_url('unidade/excluir/'.$uni->id_unidade)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja excluir a unidade <?=$uni->nome_unidade?>?');">Remover</a>
              <a href="#" class="btn btn-warning btn-group">Perfil</a>
            </td>
          </tr>
          <?php }?>
        </table>
      </div>
    </div>

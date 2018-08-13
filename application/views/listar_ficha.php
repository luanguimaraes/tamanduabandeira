
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <div class="col-md-1">
              <h1 class="h2">Fichas</h1>
            </div>

            <div class=" col-2 col-md-2">
              <a class="btn btn-primary btn-block" href="<?=base_url()?>ficha/cadastro">Nova Ficha</a>
            </div>

        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <table class="table table-striped">
          <tr>
            <th>ID Taxonomica</th>
            <th>Unidade Recebimento</th>
            <th>Nome Procedencia</th>
            <th>Data Recebimento</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <?php foreach($fichas as $ficha) {?>
          <tr>
            <td><?= $ficha->identificacao_taxonomica?></td>
            <td><?= $ficha->nome_unidade?></td>
            <td><?= $ficha->nome_procedencia?></td>
            <td><?= date('d-m-Y' ,strtotime($ficha->data_recebimento))?></td>
            <td>
              <a href="<?= base_url('ficha/editar/'.$ficha->identificacao_taxonomica)?>" class="btn btn-primary btn-group">Recebimento</a>
              <a href="<?= base_url('ficha/cadastro_triagem/'.$ficha->identificacao_taxonomica)?>" class="btn btn-danger btn-group">Triagem</a>
              <a href="<?= base_url('ficha/cadastro_avaliacao/'.$ficha->identificacao_taxonomica)?>" class="btn btn-warning btn-group">Avaliação</a>
            </td>
          </tr>
          <?php }?>
        </table>
      </div>
    </div>

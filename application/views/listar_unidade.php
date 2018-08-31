
      <div id="content-wrapper">
        <div class="container-fluid">
            <div class="pb-2 mb-3 border-bottom align-items-center">
              <div class="row">
              <div class="col-3">
                <h1 class="h2 titulo">Unidades</h1>
              </div>

              <div class="col-9">
                <a class="btn btn-dark botao " href="<?=base_url()?>unidade/cadastro">Nova Unidade</a>
              </div>
          </div>
        </div>

      <div class="row tabela">
        <div class="col-md-12 col-sm-12 col-lg-12">
          <table class="table table-striped">
            <tr>
              <th>Nome</th>
              <th>CNPJ</th>
              <th>Nome Responsável</th>
              <th>Cidade</th>
              <th></th>
            </tr>
            <?php foreach($unidade as $uni) {?>
            <tr>
              <td><?= $uni->nome_unidade?></td>
              <td><?= $uni->cnpj_unidade?></td>
              <td><?= $uni->nome_responsavel?></td>
              <td><?= $uni->municipio_unidade.' - '.$uni->estado_unidade?></td>

              <td>
                <a href="<?= base_url('unidade/editar/'.$uni->id_unidade)?>" class="btn btn-primary btn-group tamanho">Editar</a>
                <a href="<?= base_url('unidade/excluir/'.$uni->id_unidade)?>" class="btn btn-danger btn-group tamanho" onclick="return confirm('Deseja excluir a unidade <?=$uni->nome_unidade?>?');">Remover</a>
                <!-- <a href="#" class="btn btn-warning btn-group">Perfil</a> -->
              </td>
            </tr>
            <?php }?>
          </table>
        </div>
      </div>
    </div> <!-- fechamendo class="container-fluid" -->

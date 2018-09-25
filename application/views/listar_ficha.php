
          <div id="content-wrapper">
            <div class="container-fluid">

              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= base_url()?>ficha">Fichas</a>
                </li>
                <li class="breadcrumb-item active">Visão Geral</li>
              </ol>

                <div class="pb-2 mb-3 border-bottom align-items-center">
                  <div class="row">
                  <div class="col-3">
                    <h1 class="h2 titulo">Fichas</h1>
                  </div>

                  <div class="col-9">
                    <a class="btn btn-dark botao " href="<?=base_url()?>ficha/cadastro">Nova Ficha</a>
                  </div>
              </div>
            </div>

          <div class="row tabela">
            <div class="col-md-12 col-sm-12 col-lg-12">
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
                  <?php
                      $id_triagem = 0;
                      $id_ava = 0;
                      $active = 'hue';
                      foreach ($triagens as $triagem) {
                        if(($triagem->identificacao_taxonomica) == $ficha->identificacao_taxonomica){

                          $id_triagem = 1;
                        }
                      }
                      foreach ($avaliacao as $ava) {
                        if(($ava->identificacao_taxonomica_ava) == $ficha->identificacao_taxonomica){
                          $id_ava = 1;
                        }
                      }
                     if($id_triagem == 0){
                       $active = 'desativado';
                     }
                  ?>

                <tr>
                  <td><?= $ficha->identificacao_taxonomica?></td>
                  <td><?= $ficha->nome_unidade?></td>
                  <td><?= $ficha->nome_procedencia?></td>
                  <td><?= date('d-m-Y' ,strtotime($ficha->data_recebimento))?></td>
                  <td>
                    <a href="<?= base_url('ficha/editar/'.$ficha->identificacao_taxonomica)?>" class="btn btn-primary btn-group tamanho">Recebimento</a>
                    <a href="<?= base_url('ficha/cadastro_triagem/'.$ficha->identificacao_taxonomica)?>" <?= $id_triagem==1? 'class="btn btn-warning btn-group tamanho"' : 'class="btn btn-outline-warning btn-group tamanho"' ?> >Triagem</a>
                    <a id='<?= $active?>' href="<?= base_url('ficha/cadastro_avaliacao/'.$ficha->identificacao_taxonomica)?>" <?= $id_ava==1? 'class="btn btn-success btn-group tamanho"' : 'class="btn btn-outline-success btn-group tamanho"' ?>>Avaliação</a>
                  </td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
        </div> <!-- fechamendo class="container-fluid" -->

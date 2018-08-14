
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Triagem</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>ficha/cadastrar_triagem/<?=$id?>" method="post">
        <input type="hidden" id="id_taxonomica" name="id_taxonomica" value="<?=$id?>">
          <style media="screen">
            fieldset{
              padding: 10px;
              margin: 10px;
              border-style: solid;
              border-width: 0.5px;
              border-radius: 10px;
            }
            legend{
              display: inline-flex;
              width: auto;
            }
          </style>

          <fieldset>


          <fieldset class="form-group"> <legend>Unidade</legend>
            <div class="form-group">
              <label for="exampleInputEmail1">Escolha a unidade da triagem:</label>
              <select id="unidade" name="unidade" class="form-control"   required>

                <?php foreach($unidades as $unidade) {?>
                <option value="<?= $unidade->id_unidade?>"  <?= $retorno>0? $unidade->id_unidade==$triagem[0]->id_unidade? 'selected' : '' : '' ?>    ><?= $unidade->nome_unidade.' - '.$unidade->municipio_unidade; ?></option>
                <?php }?>
              </select>
            </div>
          </fieldset>

          <fieldset>
            <legend>Responsável</legend>
          <div class="form-group">
            <label for="exampleInputNome">Marcação Individual:  *</label>
            <input type="text" class="form-control" name="marcacao_individual" id="marcacao_individual" value="<?= $retorno>0? $triagem[0]->marcacao_individual : '' ?>" maxlength="64" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Nome Avaliador:  *</label>
            <input type="text" class="form-control" name="nome_avaliador" id="nome_avaliador" value="<?= $retorno>0? $triagem[0]->nome_avaliador : $usuario_logado ?>"  maxlength="64" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Situação do Animal:  *</label>
            <select class="form-control" name="categoria_animal" id="categoria_animal" required>
              <option value="0"> --- </option>
              <?php foreach($animais as $animal) {?>
              <option value="<?= $animal->id_animal?>" <?= $retorno>0? $animal->id_animal==$triagem[0]->id_animal? 'selected' : '' : '' ?>  ><?= $animal->categoria?></option>
              <?php }?>
            </select>
          </div>
          </fieldset>
        </fieldset>


          <div style="text-align: right">
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
        </form>

      </div>

    </div>

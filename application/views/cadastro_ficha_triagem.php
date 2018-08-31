
    <div id="content-wrapper">
      <div class="container-fluid">

        <div class="pb-2 mb-3 border-bottom align-items-center">
          <div class="row">
            <div class="col-12">
              <h1 class="h2 titulo">Triagem</h1>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 mb-2">

          <form action="<?= base_url()?>ficha/cadastrar_triagem/<?=$id?>" method="post">
          <input type="hidden" id="id_taxonomica" name="id_taxonomica" value="<?=$id?>">

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
              <a href="<?=base_url()?>ficha" class="btn btn-danger">Cancelar</a>
            </div>
          </form>

        </div>
        </div>

    </div> <!-- fechamendo class="container-fluid" -->

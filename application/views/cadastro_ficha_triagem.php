
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Triagem</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>ficha/cadastrar_triagem" method="post">
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
                <option value="1"> --- </option>
                <?php foreach($unidades as $unidade) {?>
                <option value="<?= $unidade->id_unidade?>"><?= $unidade->nome_unidade.' - '.$unidade->municipio_unidade; ?></option>
                <?php }?>
              </select>
            </div>
          </fieldset>

          <fieldset>
            <legend>Responsável</legend>
          <div class="form-group">
            <label for="exampleInputNome">Marcação Individual:  *</label>
            <input type="text" class="form-control" name="marcacao_individual" id="marcacao_individual" maxlength="64" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Nome Avaliador:  *</label>
            <input type="text" class="form-control" name="nome_avaliador" id="nome_avaliador" value="<?= $usuario_logado?>"  maxlength="64" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Categoria do Animal:  *</label>
            <select class="form-control" name="categoria_animal" id="categoria_animal" required>
              <option value="0"> --- </option>
              <?php foreach($animais as $animal) {?>
              <option value="<?= $animal->id_animal?>"><?= $animal->categoria?></option>
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

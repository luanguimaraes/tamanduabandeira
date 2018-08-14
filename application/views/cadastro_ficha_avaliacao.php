
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Avaliação</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>ficha/cadastrar_avaliacao/<?=$id?>" method="post">
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
            #avaliacao_compormental{
              width: 100%;
            }
          </style>

        <fieldset>

          <fieldset>

          <div class="form-group">
            <label for="exampleInputNome">Espécie:  *</label>
            <input type="text" class="form-control" name="especie_avaliacao" id="especie_avaliacao" maxlength="64" value="<?= $retorno>0? $avaliacao[0]->especie_avaliacao : '' ?>" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Marcação Individual Tipo:  *</label>
            <input type="text" class="form-control" name="marcacao_indv_tipo" id="marcacao_indv_tipo"  maxlength="64" value="<?= $retorno>0? $avaliacao[0]->marcacao_indv_tipo : '' ?>" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Marcação Localização:  *</label>
            <input type="text" class="form-control" name="marcacao_indv_localizacao" id="marcacao_indv_localizacao"  maxlength="32" value="<?= $retorno>0? $avaliacao[0]->marcacao_indv_localizacao : '' ?>" required>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Marcação Numeração:</label>
            <input type="text" class="form-control" name="marcacao_indv_numeracao" id="marcacao_indv_numeracao" value="<?= $retorno>0? $avaliacao[0]->marcacao_indv_numeracao : '' ?>"  maxlength="32" >
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Marcação Sexagem:</label>
            <input type="text" class="form-control" name="marcacao_indv_sexagem" id="marcacao_indv_sexagem" value="<?= $retorno>0? $avaliacao[0]->marcacao_indv_sexagem : '' ?>"  maxlength="32" >
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Marcação Histórico:</label>
            <input type="text" class="form-control" name="marcacao_indv_historico" id="marcacao_indv_historico" value="<?= $retorno>0? $avaliacao[0]->marcacao_indv_historico : '' ?>"  maxlength="32" >
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Marcação Anamnese:</label>
            <input type="text" class="form-control" name="marcacao_indv_anamnese" id="marcacao_indv_anamnese"  maxlength="32" value="<?= $retorno>0? $avaliacao[0]->marcacao_indv_anamnese : '' ?>" >
          </div>

          <!-- <div class="form-group">
            <label for="exampleInputNome">Avaliação Comportamental: *</label>
            <input type="text" class="form-control" name="avaliacao_compormental" id="avaliacao_compormental"  maxlength="102" required>
          </div> -->

          <div class="form-group">
            <label for="exampleInputNome">Avaliação Comportamental: *</label>
            <textarea class="form-control" id="avaliacao_compormental" name="avaliacao_compormental" rows="10" cols="50" maxlength="500"  required><?= $retorno>0? $avaliacao[0]->avaliacao_compormental : '' ?></textarea>
          </div>

          <!-- <div class="form-group">
            <label for="exampleInputNome">Exames:</label>
            <input type="file" class="form-control" name="exames_arquivo" id="exames_arquivo"  maxlength="200" >
          </div> -->

          <div class="form-group">
            <label for="exampleInputNome">Categoria do Animal:  *</label>
            <select class="form-control" name="categoria_animal" id="categoria_animal" required>
              <option value="0" <?= $retorno>=0? $avaliacao[0]->status_animal==0? 'selected' : '' : '' ?> >Status Animal</option>
              <option value="1" <?= $retorno>=0? $avaliacao[0]->status_animal==1? 'selected' : '' : '' ?> >Cativeiro</option>
              <option value="2" <?= $retorno>=0? $avaliacao[0]->status_animal==2? 'selected' : '' : '' ?> >Reabilitação</option>
              <option value="3" <?= $retorno>=0? $avaliacao[0]->status_animal==3? 'selected' : '' : '' ?> >Áreas Soltura</option>
              <option value="4" <?= $retorno>=0? $avaliacao[0]->status_animal==4? 'selected' : '' : '' ?> >Óbito</option>
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

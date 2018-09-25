
    <div id="content-wrapper">
      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= base_url()?>ficha">Fichas</a>
          </li>
          <li class="breadcrumb-item active">Editar Recebimento</li>
        </ol>


        <div class="pb-2 mb-3 border-bottom align-items-center">
          <div class="row">
            <div class="col-12">
              <h1 class="h2 titulo">Editar Recebimento</h1>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 mb-2">

          <form action="<?= base_url()?>ficha/salvar_atualizacao" method="post">
            <input type="hidden" id="id_taxonomica" name="id_taxonomica" value="<?= $ficha[0]->identificacao_taxonomica?>">

            <fieldset>


            <fieldset class="form-group"> <legend>Unidade</legend>
              <div class="form-group">
                <label for="exampleInputEmail1">Escolha a unidade:</label>
                <select id="unidade" name="unidade" class="form-control" required>

                  <?php foreach($unidades as $unidade) {?>
                  <option value="<?= $unidade->id_unidade?>" <?= $ficha[0]->id_unidade_recebimento==$unidade->id_unidade?' selected ':''; ?> ><?= $unidade->nome_unidade.' - '.$unidade->municipio_unidade; ?></option>
                  <?php }?>
                </select>
              </div>

            </fieldset>



            <fieldset>
              <legend>Responsável</legend>
            <div class="form-group">
              <label for="exampleInputNome">Responsável entrega:  *</label>
              <input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Nome completo" maxlength="36" value="<?= $ficha[0]->nome_resp_entrega?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">CPF Responsável:  *</label>
              <input type="text" class="form-control" name="cpf_responsavel" id="cpf_responsavel" placeholder="Somente números" maxlength="11" value="<?= $ficha[0]->cpf_resp_entrega?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Matricula Responsável:  *</label>
              <input type="text" class="form-control" name="matricula_responsavel" id="matricula_responsavel" placeholder="" maxlength="64" value="<?= $ficha[0]->matricula_resp_entrega?>" required>
            </div>
            </fieldset>



            <fieldset>
            <legend>Procedência</legend>

            <div class="form-group">
              <label for="exampleInputNome">Nome Procedencia:</label>
              <input type="text" class="form-control" name="nome_procedencia" id="nome_procedencia"  maxlength="36" value="<?= $ficha[0]->nome_procedencia?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">UF Município Procedencia:</label>
              <input type="text" class="form-control" name="uf_municipio_procedencia" id="uf_municipio_procedencia"  maxlength="36" value="<?= $ficha[0]->uf_municipio_procedencia?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Residencia Procedencia:</label>
              <input type="text" class="form-control" name="residencia_procedencia" id="residencia_procedencia"  maxlength="36" value="<?= $ficha[0]->residencia_procedencia?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Local Procedencia:</label>
              <input type="text" class="form-control" name="local_procedencia" id="local_procedencia"  maxlength="36" value="<?= $ficha[0]->local_procedencia?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Deposito Procedencia:</label>
              <input type="text" class="form-control" name="deposito_procedencia" id="deposito_procedencia"  maxlength="36" value="<?= $ficha[0]->deposito_procedencia?>">
            </div>
            </fieldset>

            <fieldset>
              <legend>Infomações</legend>

            <div class="form-group">
              <label for="exampleInputNome">Data Recebimento:</label>
              <input type="date" class="form-control" name="data_recebimento" id="data_recebimento" value="<?= $ficha[0]->data_recebimento?>" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Dieta:</label>
              <input type="text" class="form-control" name="dieta" id="dieta"  maxlength="36" value="<?= $ficha[0]->dieta?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Tempo Cativeiro:</label>
              <input type="text" class="form-control" name="tempo_cativeiro" id="tempo_cativeiro"  maxlength="36" value="<?= $ficha[0]->tempo_cativeiro?>">
            </div>
            </fieldset>

            <fieldset>
              <legend>Classificação Animal</legend>
            <div class="form-group">
              <label for="exampleInputNome">Nome Comum: </label>
              <input type="text" class="form-control" name="nome_comum" id="nome_comum" value="<?= $ficha_animal[0]->nome_comum?>"  maxlength="36">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Nome Científico:  *</label>
              <input type="text" class="form-control" name="nome_cientifico" id="nome_cientifico" value="<?= $ficha_animal[0]->nome_cientifico?>" maxlength="64" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Quantidade:</label>
              <input type="number" class="form-control" name="quantidade" id="quantidade" value="<?= $ficha_animal[0]->quantidade?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Observação Adicional: </label>
              <input type="text" class="form-control" name="observacao_adicional" id="observacao_adicional"  maxlength="64" value="<?= $ficha_animal[0]->observacao_adicional?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Marcação Individual  *: </label>
              <input type="text" class="form-control" name="marcacao_individual" id="marcacao_individual"  maxlength="36" value="<?= $ficha_animal[0]->marcacao_individual?>" required>
            </div>
            </fieldset>


            <fieldset>
            <legend>Atuador</legend>

            <div class="form-group">
              <label for="exampleInputNome">Nome:</label>
              <input type="text" class="form-control" name="nome_atuador" id="nome_atuador" placeholder="Nome completo" value="<?= $ficha_atuador[0]->nome_atuador?>" maxlength="36">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">CPF/CNPJ:</label>
              <input type="text" class="form-control" name="cpf_cnpj_atuador" id="cpf_cnpj_atuador" placeholder="CPF ou CNPJ" maxlength="18" value="<?= $ficha_atuador[0]->cpf_cnpj_atuador?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Telefone:</label>
              <input type="text" class="form-control" name="telefone_atuador" id="telefone_atuador" maxlength="16" value="<?= $ficha_atuador[0]->telefone_atuador?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Endereço:</label>
              <input type="text" class="form-control" name="endereco_atuador" id="endereco_atuador" maxlength="36" value="<?= $ficha_atuador[0]->endereco_atuador?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Município:</label>
              <input type="text" class="form-control" name="municipio_atuador" id="municipio_atuador" placeholder="Nome completo" maxlength="36" value="<?= $ficha_atuador[0]->municipio_uf_atuador?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">CEP:</label>
              <input type="text" class="form-control" name="cep_atuador" id="cep_atuador" placeholder="Somento números" maxlength="8" value="<?= $ficha_atuador[0]->cep_atuador?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Data:</label>
              <input type="date" class="form-control" name="data_atuador" id="data_atuador" value="<?= $ficha_atuador[0]->datta?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Número Infração:</label>
              <input type="text" class="form-control" name="auto_infracao_numero" id="auto_infracao_numero" maxlength="200" value="<?= $ficha_atuador[0]->auto_infracao_numero?>">
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Número Boletim de Ocorrência:</label>
              <input type="number" class="form-control" name="boletim_ocorrencia_numero" id="boletim_ocorrencia_numero" value="<?= $ficha_atuador[0]->boletim_ocorrencia_numero?>">
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

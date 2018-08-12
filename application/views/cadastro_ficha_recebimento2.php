
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Recebimento</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>ficha/cadastrar/2" method="post">
          <input type="hidden" id="identificacao_taxonomica" name="identificacao_taxonomica" value="<?=$id_taxonomica?>">
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

          <fieldset> <legend>Parte 2/2</legend>


          <fieldset>
            <legend>Classificação Animal</legend>
          <div class="form-group">
            <label for="exampleInputNome">Nome Comum: </label>
            <input type="text" class="form-control" name="nome_comum" id="nome_comum"  maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Nome Científico:  *</label>
            <input type="text" class="form-control" name="nome_cientifico" id="nome_cientifico" maxlength="64" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Quantidade:</label>
            <input type="number" class="form-control" name="quantidade" id="quantidade">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Observação Adicional: </label>
            <input type="text" class="form-control" name="observacao_adicional" id="observacao_adicional"  maxlength="64">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Marcação Individual  *: </label>
            <input type="text" class="form-control" name="marcacao_individual" id="marcacao_individual"  maxlength="36" required>
          </div>
          </fieldset>


          <fieldset>
          <legend>Atuador</legend>

          <div class="form-group">
            <label for="exampleInputNome">Nome:</label>
            <input type="text" class="form-control" name="nome_atuador" id="nome_atuador" placeholder="Nome completo" maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">CPF/CNPJ:</label>
            <input type="text" class="form-control" name="cpf_cnpj_atuador" id="cpf_cnpj_atuador" placeholder="CPF ou CNPJ" maxlength="18">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Telefone:</label>
            <input type="text" class="form-control" name="telefone_atuador" id="telefone_atuador" maxlength="16">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Endereço:</label>
            <input type="text" class="form-control" name="endereco_atuador" id="endereco_atuador" maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Município:</label>
            <input type="text" class="form-control" name="municipio_atuador" id="municipio_atuador" placeholder="Nome completo" maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">CEP:</label>
            <input type="text" class="form-control" name="cep_atuador" id="cep_atuador" placeholder="Somento números" maxlength="8">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Data:</label>
            <input type="date" class="form-control" name="data_atuador" id="data_atuador">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Número Infração:</label>
            <input type="text" class="form-control" name="auto_infracao_numero" id="auto_infracao_numero" maxlength="200">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Número Boletim de Ocorrência:</label>
            <input type="number" class="form-control" name="boletim_ocorrencia_numero" id="boletim_ocorrencia_numero">
          </div>

          </fieldset>
            </fieldset>


          <div style="text-align: right">
            <button type="submit" class="btn btn-success">Concluir</button>
          </div>
        </form>

      </div>

    </div>

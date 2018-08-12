
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Recebimento</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>ficha/cadastrar/1" method="post">

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

          <fieldset> <legend>Parte 1/2</legend>


          <fieldset class="form-group"> <legend>Unidade</legend>
            <div class="form-group">
              <label for="exampleInputEmail1">Escolha a unidade:</label>
              <select id="unidade" name="unidade" class="form-control"   required>
                <option value="1"> --- </option>
                <?php foreach($unidades as $unidade) {?>
                <option value="<?= $unidade->id_unidade?>"><?= $unidade->nome_unidade.' - '.$unidade->municipio_unidade; ?></option>
                <?php }?>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputNome">Endereço da Unidade: *</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="64" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Telefone da Unidade:  *</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="64" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">Cidade da Unidade:  *</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="64" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNome">CEP Unidade:  *</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="64" required>
            </div> -->
          </fieldset>



          <fieldset>
            <legend>Responsável</legend>
          <div class="form-group">
            <label for="exampleInputNome">Responsável entrega:  *</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Nome completo" maxlength="36" value="<?= $usuario_logado?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNome">CPF Responsável:  *</label>
            <input type="text" class="form-control" name="cpf_responsavel" id="cpf_responsavel" placeholder="Somente números" maxlength="11" value="<?= $cpf_logado?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Matricula Responsável:  *</label>
            <input type="text" class="form-control" name="matricula_responsavel" id="matricula_responsavel" placeholder="" maxlength="64" required>
          </div>
          </fieldset>



          <fieldset>
          <legend>Procedência</legend>

          <div class="form-group">
            <label for="exampleInputNome">Nome Procedencia:</label>
            <input type="text" class="form-control" name="nome_procedencia" id="nome_procedencia" placeholder="Nome completo" maxlength="36" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNome">UF Município Procedencia:</label>
            <input type="text" class="form-control" name="uf_municipio_procedencia" id="uf_municipio_procedencia" placeholder="Nome completo" maxlength="36" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Residencia Procedencia:</label>
            <input type="text" class="form-control" name="residencia_procedencia" id="residencia_procedencia" placeholder="Nome completo" maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Local Procedencia:</label>
            <input type="text" class="form-control" name="local_procedencia" id="local_procedencia" placeholder="Nome completo" maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Deposito Procedencia:</label>
            <input type="text" class="form-control" name="deposito_procedencia" id="deposito_procedencia" placeholder="Nome completo" maxlength="36">
          </div>
          </fieldset>

          <fieldset>
            <legend>Infomações</legend>

          <div class="form-group">
            <label for="exampleInputNome">Data Recebimento:</label>
            <input type="date" class="form-control" name="data_recebimento" id="data_recebimento" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Dieta:</label>
            <input type="text" class="form-control" name="dieta" id="dieta"  maxlength="36">
          </div>
          <div class="form-group">
            <label for="exampleInputNome">Tempo Cativeiro:</label>
            <input type="text" class="form-control" name="tempo_cativeiro" id="tempo_cativeiro" placeholder="Nome completo" maxlength="36">
          </div>
          </fieldset>
            </fieldset>


          <div style="text-align: right">
            <button type="submit" class="btn btn-success">Proximo>></button>
          </div>
        </form>

      </div>

    </div>

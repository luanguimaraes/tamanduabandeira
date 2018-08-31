
    <div id="content-wrapper">
      <div class="container-fluid">

        <div class="pb-2 mb-3 border-bottom align-items-center">
          <div class="row">
            <div class="col-12">
              <h1 class="h2 titulo">Nova Unidade</h1>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 mb-2">
          <form action="<?= base_url()?>unidade/cadastrar" method="post">
            <div class="form-group">
              <label for="exampleInputNome">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="76" required>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputNome">CNPJ:</label>
                  <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="Somente números" maxlength="14" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Telefone:</label>
                  <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Somente números" maxlength="14" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">FAX:</label>
                  <input type="text" class="form-control" name="fax" id="fax" placeholder="Somente números" maxlength="14">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputNome">Nome Responsável</label>
              <input type="text" class="form-control" name="nome_responsavel" id="nome_responsavel" placeholder="Nome completo" maxlength="64" required>
            </div>

            <div class="form-group">
              <label for="exampleInputNome">Formação Responsável:</label>
              <input type="text" class="form-control" name="formacao_responsavel" id="formacao_responsavel" placeholder="Básico..., Técnico em..., Superior em..." maxlength="88" required>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Endereço:</label>
                  <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Avenida..." maxlength="36" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">CEP:</label>
                  <input type="number" class="form-control" name="cep" id="cep" placeholder="Somente Números" maxlength="14" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cidade:</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" maxlength="36" required>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Estado:</label>
                  <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" maxlength="36" required>
                </div>
              </div>
            </div>

            <div style="text-align: right">
              <button type="submit" class="btn btn-success">Enviar</button>
              <a href="<?=base_url()?>unidade" class="btn btn-danger">Cancelar</a>
            </div>
          </form>

        </div>
        </div>

    </div> <!-- fechamendo class="container-fluid" -->

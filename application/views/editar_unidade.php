
    <div id="content-wrapper">
      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= base_url()?>unidade">Unidades</a>
          </li>
          <li class="breadcrumb-item active">Editar Unidade</li>
        </ol>

        <div class="pb-2 mb-3 border-bottom align-items-center">
          <div class="row">
            <div class="col-12">
              <h1 class="h2 titulo">Editar Unidade</h1>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 mb-2">

          <form action="<?= base_url()?>unidade/salvar_atualizacao" method="post">
            <input type="hidden" id="id_unidade" name="id_unidade" value="<?= $unidade[0]->id_unidade?>">
            <div class="form-group">
              <label for="exampleInputNome">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="76" value="<?= $unidade[0]->nome_unidade?>" required>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputNome">CNPJ:</label>
                  <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="Somente números" maxlength="14"  value="<?= $unidade[0]->cnpj_unidade?>" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Telefone:</label>
                  <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Somente números" maxlength="14" value="<?= $unidade[0]->telefone_unidade?>" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">FAX:</label>
                  <input type="text" class="form-control" name="fax" id="fax" placeholder="Somente números" maxlength="14"  value="<?= $unidade[0]->fax_unidade?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputNome">Nome Responsável</label>
              <input type="text" class="form-control" name="nome_responsavel" id="nome_responsavel" placeholder="Nome completo" maxlength="64"  value="<?= $unidade[0]->nome_responsavel?>" required>
            </div>

            <div class="form-group">
              <label for="exampleInputNome">Formação Responsável:</label>
              <input type="text" class="form-control" name="formacao_responsavel" id="formacao_responsavel" placeholder="Básico..., Técnico em..., Superior em..." maxlength="88"  value="<?= $unidade[0]->formacao_responsavel?>" required>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Endereço:</label>
                  <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Avenida..." maxlength="36"  value="<?= $unidade[0]->endereco_unidade?>" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">CEP:</label>
                  <input type="number" class="form-control" name="cep" id="cep" placeholder="Somente Números" maxlength="14"  value="<?= $unidade[0]->cep_unidade?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cidade:</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" maxlength="36"  value="<?= $unidade[0]->municipio_unidade?>" required>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Estado:</label>
                  <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" maxlength="36"  value="<?= $unidade[0]->estado_unidade?>" required>
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

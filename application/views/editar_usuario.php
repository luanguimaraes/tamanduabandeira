
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Editar Usuário</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>usuario/salvar_atualizacao" method="post">
          <input type="hidden" id="id_servidor" name="id_servidor" value="<?= $usuario[0]->id_servidor?>">
          <div class="form-group">
            <label for="exampleInputNome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="64" value="<?= $usuario[0]->nome_usuario?>" required>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputNome">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Somente números" maxlength="11" value="<?= $usuario[0]->cpf_usuario?>" required>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email@email.com" maxlength="76" value="<?= $usuario[0]->email_usuario?>" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Formação:</label>
            <input type="text" class="form-control" name="formacao" id="formacao" placeholder="Básico..., Técnico em..., Superior em..." maxlength="88" value="<?= $usuario[0]->formacao_usuario?>">
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone:</label>
                <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Somente números" value="<?= $usuario[0]->telefone_usuario?>">
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Avenida..." maxlength="36" value="<?= $usuario[0]->endereco_usuario?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Cidade:</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" maxlength="36" value="<?= $usuario[0]->cidade_usuario?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Estado:</label>
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" maxlength="36" value="<?= $usuario[0]->estado_usuario?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Unidade:</label>
            <select id="unidade" name="unidade" class="form-control" required>
              <option value="1"> --- </option>
              <?php foreach($unidades as $unidade) {?>
              <option value="<?= $unidade->id_unidade?>" <?= $usuario[0]->id_unidade_usuario==$unidade->id_unidade?' selected ':''; ?> ><?= $unidade->nome_unidade.' - '.$unidade->municipio_unidade; ?></option>
              <?php }?>
            </select>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Nível Usuário:</label>
                <select id="nivel" name="nivel" class="form-control">
                  <option value="1" <?= $usuario[0]->id_tipo_servidor==1?' selected ':''; ?>>Funcionário</option>
                  <option value="2" <?= $usuario[0]->id_tipo_servidor==2?' selected ':''; ?>>Gerente</option>
                  <option value="3" <?= $usuario[0]->id_tipo_servidor==3?' selected ':''; ?>>Admistrador</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Senha:</label>
                <input type="button" class="btn btn-default btn-block" value="Alterar Senha" disabled>
              </div>
            </div>
          </div>

          <div style="text-align: right">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-default">Cancelar</button>
          </div>
        </form>

      </div>

    </div>
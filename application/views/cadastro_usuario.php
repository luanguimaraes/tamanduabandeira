
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-12">
              <h1 class="h2">Novo Usuário</h1>
            </div>
        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <form action="<?= base_url()?>usuario/cadastrar" method="post">
          <div class="form-group">
            <label for="exampleInputNome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" maxlength="64" required>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputNome">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Somente números" maxlength="11" required>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email@email.com" maxlength="76" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputNome">Formação:</label>
            <input type="text" class="form-control" name="formacao" id="formacao" placeholder="Básico..., Técnico em..., Superior em..." maxlength="88">
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone:</label>
                <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Somente números">
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Avenida..." maxlength="36">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Cidade:</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" maxlength="36">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Estado:</label>
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" maxlength="36">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Escolha a unidade:</label>
            <select id="unidade" name="unidade" class="form-control"  required>
      
              <?php foreach($unidades as $unidade) {?>
              <option  value="<?= $unidade->id_unidade?>"><?= $unidade->nome_unidade.' - '.$unidade->municipio_unidade; ?></option>
              <?php }?>
            </select>
          </div>



          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Nível Usuário:</label>
                <select id="nivel" name="nivel" class="form-control">
                  <option value="1">Funcionário</option>
                  <option value="2">Gerente</option>
                  <option value="3">Admistrador</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputPassword1">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" maxlength="50" required>
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


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
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo">
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputNome">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Somente números">
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email@email.com">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Somente números">
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Endereço:</label>
                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua, Avenida...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="exampleInputEmail1">Cidade:</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Estado:</label>
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Unidade:</label>
            <input type="text" class="form-control" name="unidade" id="unidade" placeholder="Unidade">
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
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
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


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
            <label for="exampleInputNome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" name="senha" id="password" placeholder="Senha">
          </div>

          <div style="text-align: right">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-default">Cancelar</button>
          </div>
        </form>

      </div>

    </div>

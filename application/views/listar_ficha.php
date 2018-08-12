
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <div class="col-md-1">
              <h1 class="h2">Fichas</h1>
            </div>
            <div class="col-md-8">
              <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Search">
            </div>
            <div class=" col-2 col-md-2">
              <a class="btn btn-primary btn-block" href="<?=base_url()?>ficha/cadastro">Nova Ficha</a>
            </div>

        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <table class="table table-striped">
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Nível</th>
            <th>Unidade</th>
            <th></th>
            <th></th>
          </tr>
          <!-- <?php foreach($usuarios as $usu) {?>
          <tr>
            <td><?= $usu->nome_usuario?></td>
            <td><?= $usu->cpf_usuario?></td>
            <td><?= $usu->id_tipo_servidor==1?'Funcionário':($usu->id_tipo_servidor==2?'Gerente':'Admistrador');    ?></td>
            <td><?= $usu->nome_unidade.' - '.$usu->municipio_unidade;?></td>
            <td>
              <a href="<?= base_url('usuario/editar/'.$usu->id_servidor)?>" class="btn btn-primary btn-group">Editar</a>
              <a href="<?= base_url('usuario/excluir/'.$usu->id_servidor)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja excluir o usuário <?=$usu->nome_usuario?>?');">Remover</a>
              <a href="#" class="btn btn-warning btn-group">Perfil</a>
            </td>
          </tr>
          <?php }?> -->
        </table>
      </div>
    </div>

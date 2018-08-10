
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col-md-10">
              <h1 class="h2">Unidades</h1>
            </div>
            <div class="col-md-2">
              <a class="btn btn-primary btn-block" href="<?=base_url()?>unidade/cadastro">Nova Unidade</a>
            </div>

        </main>
      </div>

      <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <table class="table table-striped">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th></th>
            <th></th>
          </tr>
          <?php foreach($usuarios as $usu) {?>
          <tr>
            <td><?= $usu->id_servidor;?></td>
            <td><?= $usu->nome_usuario?></td>
            <td><?= $usu->email_usuario?></td>
            <td><?= $usu->cpf_usuario?></td>
            <td>
              <a href="" class="btn btn-primary btn-group">Atualizar</a>
              <a href="<?= base_url('usuario/excluir/'.$usu->id_servidor)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja excluir o usuário <?=$usu->nome_usuario?>?');">Remover</a>
              <a href="#" class="btn btn-warning btn-group">Perfil</a>
            </td>
          </tr>
          <?php }?>
        </table>
      </div>
    </div>

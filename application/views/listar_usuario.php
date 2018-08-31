
  <div id="content-wrapper">
    <div class="container-fluid">
        <div class="pb-2 mb-3 border-bottom align-items-center">
          <div class="row">
          <div class="col-3">
            <h1 class="h2 titulo">Usuários</h1>
          </div>

          <div class="col-9">
            <a class="btn btn-dark botao " href="<?=base_url()?>usuario/cadastro">Novo Usuário</a>
          </div>
      </div>
    </div>

  <div class="row tabela">
    <div class="col-md-12 col-sm-12 col-lg-12">
      <table class="table table-striped">
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>Nível</th>
          <th>Unidade</th>
          <th></th>
        </tr>
        <?php foreach($usuarios as $usu) {?>
        <tr>
          <td><?= $usu->nome_usuario?></td>
          <td><?= $usu->cpf_usuario?></td>
          <td><?= $usu->id_tipo_servidor==1?'Funcionário':($usu->id_tipo_servidor==2?'Gerente':'Admistrador');    ?></td>
          <td><?= $usu->nome_unidade.' - '.$usu->municipio_unidade;?></td>
          <td>
            <a href="<?= base_url('usuario/editar/'.$usu->id_servidor)?>" class="btn btn-primary btn-group tamanho">Editar</a>
            <a href="<?= base_url('usuario/excluir/'.$usu->id_servidor)?>" class="btn btn-danger btn-group tamanho" onclick="return confirm('Deseja excluir o usuário <?=$usu->nome_usuario?>?');">Remover</a>
            <a href="<?= base_url('usuario/perfil/'.$usu->id_servidor)?>" class="btn btn-warning btn-group tamanho">Perfil</a>
          </td>
        </tr>
        <?php }?>
      </table>
    </div>
  </div>
</div> <!-- fechamendo class="container-fluid" -->

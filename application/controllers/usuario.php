<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function verificar_sessao()
	{
		if ($this->session->userdata('logado')==false) {
			redirect('dashboard/login');
		}
	}

	public function index($indice=null)
	{
		$this->verificar_sessao();
		$this->db->select('*');
		$dados['usuarios'] = $this->db->get('servidor')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		if ($indice==1) {
			$data['msg'] = 'Usuário cadastrado com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==2){
			$data['msg'] = 'Erro ao cadastrar o usuário.';
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==3){
			$data['msg'] = 'Usuário excluido com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==4){
			$data['msg'] = 'Erro ao excluir o usuário.';
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==5){
			$data['msg'] = 'Usuário editado com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==6){
			$data['msg'] = 'Erro ao editar o usuário.';
			$this->load->view('includes/msg_erro',$data);
		}
		$this->load->view('listar_usuario',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastro()
	{
		$this->verificar_sessao();
		$dados['unidades'] = $this->db->get('unidade')->result();
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('cadastro_usuario',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastrar()
	{
		$this->verificar_sessao();
		$data['nome_usuario'] = $this->input->post('nome');
		$data['email_usuario'] = $this->input->post('email');
		$data['cpf_usuario'] = $this->input->post('cpf');
		$data['formacao_usuario'] = $this->input->post('formacao');
		$data['telefone_usuario'] = $this->input->post('telefone');
		$data['endereco_usuario'] = $this->input->post('endereco');
		$data['cidade_usuario'] = $this->input->post('cidade');
		$data['estado_usuario'] = $this->input->post('estado');
		$data['id_unidade'] = $this->input->post('unidade');
		$data['id_tipo_servidor'] = $this->input->post('nivel');
		// $data['id_unidade'] = 1;
		$data['senha'] = md5($this->input->post('senha'));


		if ($this->db->insert('servidor',$data)) {
			redirect('usuario/1');
		}
		else {
			redirect('usuario/2');
		}
	}

	public function excluir($id=null)
	{
		$this->verificar_sessao();
		$this->db->where('id_servidor',$id);
		if($this->db->delete('servidor')) {
			redirect('usuario/3');
		}
		else {
			redirect('usuario/4');
		}
	}

	public function editar($id=null)
	{
		$this->verificar_sessao();
		$data['unidades'] = $this->db->get('unidade')->result();
		$this->db->where('id_servidor',$id);
		$data['usuario'] = $this->db->get('servidor')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('editar_usuario',$data);
		$this->load->view('includes/html_footer');
	}

	public function salvar_atualizacao()
	{
		$this->verificar_sessao();
		$id = $this->input->post('id_servidor');

		$data['nome_usuario'] = $this->input->post('nome');
		$data['email_usuario'] = $this->input->post('email');
		$data['cpf_usuario'] = $this->input->post('cpf');
		$data['formacao_usuario'] = $this->input->post('formacao');
		$data['telefone_usuario'] = $this->input->post('telefone');
		$data['endereco_usuario'] = $this->input->post('endereco');
		$data['cidade_usuario'] = $this->input->post('cidade');
		$data['estado_usuario'] = $this->input->post('estado');
		// $data['unidade_usuario'] = $this->input->post('unidade');
		$data['id_tipo_servidor'] = $this->input->post('nivel');
		// $data['id_tipo_servidor'] = 1;
		$data['id_unidade'] = $this->input->post('unidade');


		$this->db->where('id_servidor',$id);
		if ($this->db->update('servidor',$data)) {
			redirect('usuario/5');
		}
		else {
			redirect('usuario/6');
		}
	}

}

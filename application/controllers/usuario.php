<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index($indice=null)
	{
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
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==4){
			$data['msg'] = 'Erro ao excluir o usuário.';
			$this->load->view('includes/msg_erro',$data);
		}
		$this->load->view('listar_usuario',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastro()
	{
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('cadastro_usuario');
		$this->load->view('includes/html_footer');
	}

	public function cadastrar()
	{
		$data['nome_usuario'] = $this->input->post('nome');
		$data['email_usuario'] = $this->input->post('email');
		$data['cpf_usuario'] = $this->input->post('cpf');
		$data['id_tipo_servidor'] = 1;
		$data['id_unidade'] = 1;
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
		$this->db->where('id_servidor',$id);
		if($this->db->delete('servidor')) {
			redirect('usuario/3');
		}
		else {
			redirect('usuario/4');
		}
	}


}

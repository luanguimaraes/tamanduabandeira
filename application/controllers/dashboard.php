<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function verificar_sessao()
	{
		if ($this->session->userdata('logado')==false) {
			redirect('dashboard/login');
		}
	}

	public function index()
	{
		$this->verificar_sessao();
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('dashboard');
		$this->load->view('includes/html_footer');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function logar(){

		$cpf = $this->input->post('cpf');
		$senha = md5($this->input->post('senha'));

		$this->db->where('senha',$senha);
		$this->db->where('cpf_usuario',$cpf);
		$data['usuario'] = $this->db->get('servidor')->result();


		if (count($data['usuario'])=='1') {
			$dados['nome'] = $data['usuario'][0]->nome_usuario;
			$dados['id'] = $data['usuario'][0]->id_servidor;
			$dados['logado'] = true;
			$this->session->set_userdata($dados);
			redirect('dashboard');
		}else{
			redirect('dashboard/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('dashboard');
	}

}

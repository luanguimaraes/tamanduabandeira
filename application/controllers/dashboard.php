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

		// $this->db->select('id_animal');

		$this->db->where('id_animal',1);
		$dados['invertebrados'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',2);
		$dados['peixes'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',3);
		$dados['anfibios'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',4);
		$dados['repteis'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',5);
		$dados['aves'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',6);
		$dados['mamiferos'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',7);
		$dados['hibridos'] = $this->db->get('triagem')->num_rows();

		$this->db->where('id_animal',8);
		$dados['exoticos'] = $this->db->get('triagem')->num_rows();


		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('dashboard',$dados);
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
			$dados['id_tipo_servidor'] = $data['usuario'][0]->id_tipo_servidor;
			$dados['cpf'] = $data['usuario'][0]->cpf_usuario;
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

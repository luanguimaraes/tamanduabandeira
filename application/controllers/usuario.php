<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar_usuario');
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
		$data['id_tipo_servidor'] = 1;
		$data['id_unidade'] = 1;
		$data['senha'] = md5($this->input->post('senha'));


		if ($this->db->insert('servidor',$data)) {
			redirect('usuario');
		}
	}


}

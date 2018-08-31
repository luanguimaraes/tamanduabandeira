<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidade extends CI_Controller {

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
		$dados['unidade'] = $this->db->get('unidade')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$this->load->view('includes/menu_inferior_admin');
		if ($indice==1) {
			$data['msg'] = 'Unidade cadastrada com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==2){
			$data['msg'] = 'Erro ao cadastrar a unidade.';
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==3){
			$data['msg'] = 'Unidade excluida com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==4){
			$data['msg'] = 'Erro ao excluir a unidade.';
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==5){
			$data['msg'] = 'Unidade editada com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==6){
			$data['msg'] = 'Erro ao editar a unidade.';
			$this->load->view('includes/msg_erro',$data);
		}
		$this->load->view('listar_unidade',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastro()
	{
		$this->verificar_sessao();
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$this->load->view('includes/menu_inferior_admin');
		$this->load->view('cadastro_unidade');
		$this->load->view('includes/html_footer');
	}

	public function cadastrar()
	{
		$this->verificar_sessao();
		$data['nome_unidade'] = $this->input->post('nome');
		$data['cnpj_unidade'] = $this->input->post('cnpj');
		$data['telefone_unidade'] = $this->input->post('telefone');
		$data['fax_unidade'] = $this->input->post('fax');
		$data['nome_responsavel'] = $this->input->post('nome_responsavel');
		$data['formacao_responsavel'] = $this->input->post('formacao_responsavel');
		$data['endereco_unidade'] = $this->input->post('endereco');
		$data['cep_unidade'] = $this->input->post('cep');
		$data['municipio_unidade'] = $this->input->post('cidade');
		$data['estado_unidade'] = $this->input->post('estado');


		if ($this->db->insert('unidade',$data)) {
			redirect('unidade/1');
		}
		else {
			redirect('unidade/2');
		}
	}

	public function excluir($id=null)
	{
		$this->verificar_sessao();
		$this->db->where('id_unidade',$id);
		if($this->db->delete('unidade')) {
			redirect('unidade/3');
		}
		else {
			redirect('unidade/4');
		}
	}

	public function editar($id=null)
	{
		$this->verificar_sessao();
		$this->db->where('id_unidade',$id);
		$data['unidade'] = $this->db->get('unidade')->result();
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$this->load->view('includes/menu_inferior_admin');
		$this->load->view('editar_unidade',$data);
		$this->load->view('includes/html_footer');
	}

	public function salvar_atualizacao()
	{
		$this->verificar_sessao();
		$id = $this->input->post('id_unidade');

		$data['nome_unidade'] = $this->input->post('nome');
		$data['cnpj_unidade'] = $this->input->post('cnpj');
		$data['telefone_unidade'] = $this->input->post('telefone');
		$data['fax_unidade'] = $this->input->post('fax');
		$data['nome_responsavel'] = $this->input->post('nome_responsavel');
		$data['formacao_responsavel'] = $this->input->post('formacao_responsavel');
		$data['endereco_unidade'] = $this->input->post('endereco');
		$data['cep_unidade'] = $this->input->post('cep');
		$data['municipio_unidade'] = $this->input->post('cidade');
		$data['estado_unidade'] = $this->input->post('estado');


		$this->db->where('id_unidade',$id);
		if ($this->db->update('unidade',$data)) {
			redirect('unidade/5');
		}
		else {
			redirect('unidade/6');
		}
	}

}

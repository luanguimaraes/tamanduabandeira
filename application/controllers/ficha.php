<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ficha extends CI_Controller {

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
		// $this->db->join('unidade','id_unidade_recebimento=id_unidade', 'inner');
		$dados['unidades'] = $this->db->get('recebimentos')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		if ($indice==1) {
			$data['msg'] = 'Ficha cadastrada com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==2){
			$data['msg'] = 'Erro ao cadastrar a ficha.';
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==3){
			$data['msg'] = 'Ficha excluida com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==4){
			$data['msg'] = 'Erro ao excluir a ficha.';
			$this->load->view('includes/msg_erro',$data);
		}else if($indice==5){
			$data['msg'] = 'Ficha editada com sucesso.';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==6){
			$data['msg'] = 'Erro ao editar a ficha.';
			$this->load->view('includes/msg_erro',$data);
		}
		$this->load->view('listar_ficha',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastro()
	{
		$this->verificar_sessao();
		$dados['unidades'] = $this->db->get('unidade')->result();
		$dados['usuario_logado'] = $this->session->userdata('nome');
		$dados['cpf_logado'] = $this->session->userdata('cpf');

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('cadastro_ficha_recebimento',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastrar($indice=null)
	{
		$this->verificar_sessao();


		if ($indice==1) {


		$data['id_unidade_recebimento'] = $this->input->post('unidade'); //nome, endereço, telefone, municipio, cep
		$data['nome_resp_entrega'] = $this->input->post('responsavel');
		$data['cpf_resp_entrega'] = $this->input->post('cpf_responsavel');
		$data['matricula_resp_entrega'] = $this->input->post('matricula_responsavel');
		$data['nome_procedencia'] = $this->input->post('nome_procedencia');
		$data['uf_municipio_procedencia'] = $this->input->post('uf_municipio_procedencia');
		$data['residencia_procedencia'] = $this->input->post('residencia_procedencia');
		$data['local_procedencia'] = $this->input->post('local_procedencia');
		$data['deposito_procedencia'] = $this->input->post('deposito_procedencia');
		$data['data_recebimento'] = $this->input->post('data_recebimento');
		$data['dieta'] = $this->input->post('dieta');
		$data['tempo_cativeiro'] = $this->input->post('tempo_cativeiro');

		if ($this->db->insert('recebimentos',$data)) {
			$data['id_taxonomica'] = $this->db->insert_id();

			$this->load->view('includes/html_header');
			$this->load->view('includes/menu');
			$this->load->view('cadastro_ficha_recebimento2',$data);
			$this->load->view('includes/html_footer');
		}
		else {
			redirect('ficha/2');
		}


  }

	if ($indice==2) {

		$data['nome_atuador'] = $this->input->post('nome_atuador');
		$data['cpf_cnpj_atuador'] = $this->input->post('cpf_cnpj_atuador');
		$data['telefone_atuador'] = $this->input->post('telefone_atuador');
		$data['endereco_atuador'] = $this->input->post('endereco_atuador');
		$data['municipio_uf_atuador'] = $this->input->post('municipio_atuador');
		$data['cep_atuador'] = $this->input->post('cep_atuador');
		$data['datta'] = $this->input->post('data_atuador');
		$data['auto_infracao_numero'] = $this->input->post('auto_infracao_numero');
		$data['boletim_ocorrencia_numero'] = $this->input->post('boletim_ocorrencia_numero');
		$data['identificacao_taxonomica'] = $this->input->post('identificacao_taxonomica');


		if ($this->db->insert('atuador',$data)) {
			$data2['id_atuador'] = $this->db->insert_id();
			$data2['nome_comum'] = $this->input->post('nome_comum');
			$data2['nome_cientifico'] = $this->input->post('nome_cientifico');
			$data2['quantidade'] = $this->input->post('quantidade');
			$data2['observacao_adicional'] = $this->input->post('observacao_adicional');
			$data2['marcacao_individual'] = $this->input->post('marcacao_individual');
			$data2['identificacao_taxonomica'] = $data['identificacao_taxonomica'];
			if ($this->db->insert('classicicacao_animal',$data2)) {
				redirect('ficha/1');
			}


		}
		else {
			redirect('ficha/2');
		}
	}


}



	// public function excluir($id=null)
	// {
	// 	$this->verificar_sessao();
	// 	$this->db->where('id_servidor',$id);
	// 	if($this->db->delete('servidor')) {
	// 		redirect('usuario/3');
	// 	}
	// 	else {
	// 		redirect('usuario/4');
	// 	}
	// }

	// public function editar($id=null)
	// {
	// 	$this->verificar_sessao();
	// 	$data['unidades'] = $this->db->get('unidade')->result();
	// 	$this->db->where('id_servidor',$id);
	// 	$data['usuario'] = $this->db->get('servidor')->result();
	//
	// 	$this->load->view('includes/html_header');
	// 	$this->load->view('includes/menu');
	// 	$this->load->view('editar_usuario',$data);
	// 	$this->load->view('includes/html_footer');
	// }
	//
	// public function salvar_atualizacao()
	// {
	// 	$this->verificar_sessao();
	// 	$id = $this->input->post('id_servidor');
	//
	// 	$data['nome_usuario'] = $this->input->post('nome');
	// 	$data['email_usuario'] = $this->input->post('email');
	// 	$data['cpf_usuario'] = $this->input->post('cpf');
	// 	$data['formacao_usuario'] = $this->input->post('formacao');
	// 	$data['telefone_usuario'] = $this->input->post('telefone');
	// 	$data['endereco_usuario'] = $this->input->post('endereco');
	// 	$data['cidade_usuario'] = $this->input->post('cidade');
	// 	$data['estado_usuario'] = $this->input->post('estado');
	// 	// $data['unidade_usuario'] = $this->input->post('unidade');
	// 	$data['id_tipo_servidor'] = $this->input->post('nivel');
	// 	// $data['id_tipo_servidor'] = 1;
	// 	$data['id_unidade_usuario'] = $this->input->post('unidade');
	//
	//
	// 	$this->db->where('id_servidor',$id);
	// 	if ($this->db->update('servidor',$data)) {
	// 		redirect('usuario/5');
	// 	}
	// 	else {
	// 		redirect('usuario/6');
	// 	}
	// }

}

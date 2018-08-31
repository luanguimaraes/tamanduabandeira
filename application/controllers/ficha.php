<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ficha extends CI_Controller {

	public function verificar_sessao($num=null)
	{
		if ($this->session->userdata('logado')==false) {
			redirect('dashboard/login');
		}
		else{
			$permissao = $this->session->userdata('id_tipo_servidor');
			if ($permissao>=$num || $num==null) {

			}else{
			// echo "<script type='text/javascript'>alert('text');</script>";
			redirect('dashboard');
			}
		}
	}

	public function index($indice=null)
	{
		$this->verificar_sessao();
		$this->db->select('*');
		$this->db->join('unidade','id_unidade_recebimento=id_unidade', 'inner');
		$this->db->order_by('data_recebimento','DESC');
		//ASC
		$dados['fichas'] = $this->db->get('recebimentos')->result();
		$dados['triagens'] = $this->db->get('triagem')->result();
		$dados['avaliacao'] = $this->db->get('avaliacao')->result();




		// $this->db->select('identificacao_taxonomica');
		// $this->db->where('identificacao_taxonomica',$indice);
		// $retorno = $this->db->get('triagem')->num_rows();


		// if($retorno > 0){
		// 	$this->db->where('identificacao_taxonomica',$indice);
		// 	if($this->db->update('triagem',$data)) {
		// 			redirect('ficha/1');
		// 	}
		// }else {
		// 	if($this->db->insert('triagem',$data)) {
		// 			redirect('ficha/1');
		// 	}
		// }






		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
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
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('cadastro_ficha_recebimento',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastrar()
	{
		$this->verificar_sessao();
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
		if($this->db->insert('recebimentos',$data)) {
			$data2['identificacao_taxonomica'] = $this->db->insert_id();
			$data2['nome_atuador'] = $this->input->post('nome_atuador');
			$data2['cpf_cnpj_atuador'] = $this->input->post('cpf_cnpj_atuador');
			$data2['telefone_atuador'] = $this->input->post('telefone_atuador');
			$data2['endereco_atuador'] = $this->input->post('endereco_atuador');
			$data2['municipio_uf_atuador'] = $this->input->post('municipio_atuador');
			$data2['cep_atuador'] = $this->input->post('cep_atuador');
			$data2['datta'] = $this->input->post('data_atuador');
			$data2['auto_infracao_numero'] = $this->input->post('auto_infracao_numero');
			$data2['boletim_ocorrencia_numero'] = $this->input->post('boletim_ocorrencia_numero');
			if($this->db->insert('atuador',$data2)) {
				$data3['id_atuador'] = $this->db->insert_id();
				$data3['nome_comum'] = $this->input->post('nome_comum');
				$data3['nome_cientifico'] = $this->input->post('nome_cientifico');
				$data3['quantidade'] = $this->input->post('quantidade');
				$data3['observacao_adicional'] = $this->input->post('observacao_adicional');
				$data3['marcacao_individual'] = $this->input->post('marcacao_individual');
				$data3['identificacao_taxonomica'] = $data2['identificacao_taxonomica'];
				if($this->db->insert('classicicacao_animal',$data3)) {
					redirect('ficha/1');
				}
				else{
					redirect('ficha/2');
				}
			}
			else{
				redirect('ficha/2');
			}
		}
		else{
			redirect('ficha/2');
		}
}


	//
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

	public function editar($id=null)
	{
		$this->verificar_sessao();
		$data['unidades'] = $this->db->get('unidade')->result();
		$this->db->where('identificacao_taxonomica',$id);
		$data['ficha'] = $this->db->get('recebimentos')->result();
		$this->db->where('identificacao_taxonomica',$id);
		$data['ficha_animal'] = $this->db->get('classicicacao_animal')->result();
		$this->db->where('identificacao_taxonomica',$id);
		$data['ficha_atuador'] = $this->db->get('atuador')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('editar_ficha_recebimento',$data);
		$this->load->view('includes/html_footer');
	}


	public function salvar_atualizacao($indice=null)
	{
		$this->verificar_sessao();
		$id = $this->input->post('id_taxonomica');

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
		$this->db->where('identificacao_taxonomica',$id);
		if($this->db->update('recebimentos',$data)) {
			$data2['nome_atuador'] = $this->input->post('nome_atuador');
			$data2['cpf_cnpj_atuador'] = $this->input->post('cpf_cnpj_atuador');
			$data2['telefone_atuador'] = $this->input->post('telefone_atuador');
			$data2['endereco_atuador'] = $this->input->post('endereco_atuador');
			$data2['municipio_uf_atuador'] = $this->input->post('municipio_atuador');
			$data2['cep_atuador'] = $this->input->post('cep_atuador');
			$data2['datta'] = $this->input->post('data_atuador');
			$data2['auto_infracao_numero'] = $this->input->post('auto_infracao_numero');
			$data2['boletim_ocorrencia_numero'] = $this->input->post('boletim_ocorrencia_numero');
			$this->db->where('identificacao_taxonomica',$id);
			if($this->db->update('atuador',$data2)) {
				$data3['id_atuador'] = $this->db->insert_id();
				$data3['nome_comum'] = $this->input->post('nome_comum');
				$data3['nome_cientifico'] = $this->input->post('nome_cientifico');
				$data3['quantidade'] = $this->input->post('quantidade');
				$data3['observacao_adicional'] = $this->input->post('observacao_adicional');
				$data3['marcacao_individual'] = $this->input->post('marcacao_individual');
				$this->db->where('identificacao_taxonomica',$id);
				if($this->db->update('classicicacao_animal',$data3)) {
					redirect('ficha/5');
				}
				else{
					redirect('ficha/6');
				}
			}
			else{
				redirect('ficha/6');
			}
		}
		else{
			redirect('ficha/6');
		}
	}

	public function cadastro_triagem($indice=null)
	{
		$this->verificar_sessao();
		$dados['unidades'] = $this->db->get('unidade')->result();
		$dados['animais'] = $this->db->get('animal')->result();
		$dados['usuario_logado'] = $this->session->userdata('nome');
		$dados['id'] = $indice;

		$this->db->select('identificacao_taxonomica');
		$this->db->where('identificacao_taxonomica',$indice);
		$retorno = $this->db->get('triagem')->num_rows();
		$dados['retorno'] = $retorno;

		if ($retorno>0) {
			$this->db->where('identificacao_taxonomica',$indice);
			$dados['triagem'] = $this->db->get('triagem')->result();
		}

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('cadastro_ficha_triagem',$dados);
		$this->load->view('includes/html_footer');
	}

	public function cadastrar_triagem($indice=null)
	{
		$this->verificar_sessao();

		$this->db->select('identificacao_taxonomica');
		$this->db->where('identificacao_taxonomica',$indice);
		$retorno = $this->db->get('triagem')->num_rows();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('cadastro_ficha_triagem');
		$this->load->view('includes/html_footer');

		$data['id_unidade'] = $this->input->post('unidade');
		$data['marcacao_individual'] = $this->input->post('marcacao_individual');
		$data['nome_avaliador'] = $this->input->post('nome_avaliador');
		$data['id_animal'] = $this->input->post('categoria_animal');
		$data['identificacao_taxonomica'] = $this->input->post('id_taxonomica');

		if($retorno > 0){
			$this->db->where('identificacao_taxonomica',$indice);
			if($this->db->update('triagem',$data)) {
					redirect('ficha/5');
			}
		}else {
			if($this->db->insert('triagem',$data)) {
					redirect('ficha/1');
			}
		}
	}

	public function cadastro_avaliacao($indice=null)
	{
		$this->verificar_sessao();
		$dados['id'] = $indice;

		$this->db->select('identificacao_taxonomica_ava');
		$this->db->where('identificacao_taxonomica_ava',$indice);
		$retorno = $this->db->get('avaliacao')->num_rows();
		$dados['retorno'] = $retorno;

		if ($retorno>0) {
			$this->db->where('identificacao_taxonomica_ava',$indice);
			$dados['avaliacao'] = $this->db->get('avaliacao')->result();
		}

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('cadastro_ficha_avaliacao',$dados);
		$this->load->view('includes/html_footer');

	}

	public function cadastrar_avaliacao($indice=null)
	{

		$this->verificar_sessao();

		$this->db->select('identificacao_taxonomica_ava');
		$this->db->where('identificacao_taxonomica_ava',$indice);
		$retorno = $this->db->get('avaliacao')->num_rows();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu_superior');
		$id_user = $this->session->userdata('id_tipo_servidor');
		if ($id_user==3) {
			$this->load->view('includes/menu_inferior_admin');
		}
		else{
			$this->load->view('includes/menu_inferior');
		}
		$this->load->view('cadastro_ficha_avaliacao');
		$this->load->view('includes/html_footer');

		$data['identificacao_taxonomica_ava'] = $this->input->post('id_taxonomica');
		$data['especie_avaliacao'] = $this->input->post('especie_avaliacao');
		$data['marcacao_indv_tipo'] = $this->input->post('marcacao_indv_tipo');
		$data['marcacao_indv_localizacao'] = $this->input->post('marcacao_indv_localizacao');
		$data['marcacao_indv_numeracao'] = $this->input->post('marcacao_indv_numeracao');
		$data['marcacao_indv_sexagem'] = $this->input->post('marcacao_indv_sexagem');
		$data['marcacao_indv_historico'] = $this->input->post('marcacao_indv_historico');
		$data['marcacao_indv_anamnese'] = $this->input->post('marcacao_indv_anamnese');
		$data['avaliacao_compormental'] = $this->input->post('avaliacao_compormental');
		$data['exames_arquivo'] = $this->input->post('exames_arquivo'); //??
		$data['status_animal'] = $this->input->post('categoria_animal');

		if($retorno > 0){
			$this->db->where('identificacao_taxonomica_ava',$indice);
			if($this->db->update('avaliacao',$data)) {
					redirect('ficha/5');
			}
		}else {
			if($this->db->insert('avaliacao',$data)) {
					redirect('ficha/1');
			}
		}

	}

}

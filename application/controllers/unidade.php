<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidade extends CI_Controller {

	public function index()
	{
		$this->load->view('listar_unidade');
	}

}

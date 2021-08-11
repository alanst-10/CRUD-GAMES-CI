<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mygames extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("mygames_model");
		$data["games"] = $this->mygames_model->mygames_index();
        $data["title"] = "My Games - CI";
		
		// print '<pre>';
		// print_r($_SESSION["logged_user"]["id"]);
		// print '</pre>'; exit();

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/my-games', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	// public function search() {
	// 	$this->load->model("busca_model");
	// 	$data["title"] = "Search Games - CI";
	// 	$data["result"] = $this->busca_model->search($this->input->post());

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/nav-top', $data);
	// 	$this->load->view('pages/resultado', $data);
	// 	$this->load->view('templates/footer', $data);
	// 	$this->load->view('templates/js', $data);
	// }
}

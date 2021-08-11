<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permissao();
	}

	public function index()
	{
		permissao();
        $this->load->model("games_model");
        $data["games"] = $this->games_model->last5();
		$this->load->model("users_model");
		$data["users"] = $this->users_model->last5();
        $data["title"] = "Dashbord - CI";

        $this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashbord', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function search() {
		$this->load->model("busca_model");
		$data["title"] = "Search Games - CI";
		$data["result"] = $this->busca_model->search($this->input->post());

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}

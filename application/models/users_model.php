<?php

class Users_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("users_model");
    }

    public function index() {
        return $this->db->get("tb_users")->result_array();
    }

    public function last5() {
        $this->db->order_by("id", "DESC");
        $this->db->limit(5);
        return $this->db->get("tb_users")->result_array();
    }

    // public function show($id) {
    //     return $this->db->get_where("tb_games", array("id" => $id))->row_array();
    // }

    public function store($user) {
        return $this->db->insert("tb_users", $user);
    }

}
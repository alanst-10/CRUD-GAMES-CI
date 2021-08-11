<?php

class Mygames_model extends CI_Model {

    public function mygames_index() {
        $this->db->where("user_id", $_SESSION["logged_user"]["id"]);
        $this->db->order_by("id", "ASC");
        return $this->db->get("tb_games")->result_array();
    }
}
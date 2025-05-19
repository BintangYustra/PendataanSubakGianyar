<?php
class SubakModel extends CI_Model {
    public function get_all() {
        return $this->db->get('tb_subak')->result();
    }

    public function insert($data) {
        $this->db->insert('tb_subak', $data);
    }
}
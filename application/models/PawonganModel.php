<?php
class PawonganModel extends CI_Model {
    public function insert_batch($data) {
        $this->db->insert_batch('tb_pawongan', $data);
    }
}
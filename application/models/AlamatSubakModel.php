<?php
class AlamatSubakModel extends CI_Model {
    public function insert_batch($data) {
        $this->db->insert_batch('tb_alamat_subak', $data);
    }
}
<?php
class PerahyanganBedugulAdaModel extends CI_Model {
    public function insert_batch($data) {
        $this->db->insert_batch('tb_perahyangan_ada_bedugul', $data);
    }
}
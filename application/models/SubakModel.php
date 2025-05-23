<?php
class SubakModel extends CI_Model {
    public function get_all() {
        return $this->db->get('tb_subak')->result();
    }

    // insert data ke database
    public function insert_subak($data) {
        $this->db->insert('tb_subak', $data);
    }

    public function insert_alamat_suba($data) {
        $this->db->insert('tb_alamat_subak', $data);
    }

    public function insert_prajuru($data) {
        $this->db->insert('tb_prajuru', $data);
    }

    public function insert_perahyangan($data) {
        $this->db->insert('tb_perahyangan', $data);
    }

    public function insert_perahyangan_ada_bedugu($data) {
        $this->db->insert('tb_perahyangan_ada_bedugul', $data);
    }

    public function insert_pawongan($data) {
        $this->db->insert('tb_pawongan', $data);
    }

    public function insert_aci_aci($data) {
        $this->db->insert('tb_aci_aci', $data);
    }
    // 

}
<?php
class SubakModel extends CI_Model {

    public function insert_tb_subak($data) {
        $this->db->insert('tb_subak', $data);
        return $this->db->insert_id();
    }

    public function insert_tb_alamat_subak($data) {
        $this->db->insert('tb_alamat_subak', $data);
    }

    public function insert_tb_prajuru($data) {
        $this->db->insert('tb_prajuru', $data);
    }

    public function insert_tb_perahyangan($data) {
        $this->db->insert('tb_perahyangan', $data);
    }

    public function insert_tb_perahyangan_pura_bedugul_ada($data) {
        $this->db->insert('tb_perahyangan_pura_bedugul_ada', $data);
    }

    public function insert_tb_perahyangan_pura_bedugul_tidakada($data) {
        $this->db->insert('tb_perahyangan_pura_bedugul_tidakada', $data);
    }

    public function insert_tb_perahyangan_inventaris($data) {
        $this->db->insert('tb_inventaris', $data);
    }

    public function insert_tb_perahyangan_aci_aci_subak($data) {
        $this->db->insert('tb_aci_aci', $data);
    }

    public function insert_tb_pawongan($data) {
        $this->db->insert('tb_pawongan', $data);
    }

    public function insert_tb_palemahan($data) {
        $this->db->insert('tb_palemahan', $data);
    }

    public function insert_tb_palemahan_tanaman_pokok($data) {
        $this->db->insert('tb_tanaman_pokok', $data);
    }

    public function insert_tb_palemahan_jenis_tanaman_pokok($data) {
        $this->db->insert('tb_jenis_tanaman_pokok', $data);
    }

    public function insert_tb_palemahan_hama($data) {
        $this->db->insert('tb_hama', $data);
    }

    public function insert_tb_palemahan_bantuan_pemerintah($data) {
        $this->db->insert('tb_bantuan_pemerintah', $data);
    }











    public function get_all_subak() {
        return $this->db->get('tb_subak')->result();
    }

    public function get_total_subak() {
    return $this->db->count_all('tb_subak');
    }

    public function get_all_subak_alamat() {
        return $this -> db -> get('tb_alamat_subak') -> result();
    }



    public function pagination($limit, $start)
    {
        return $this -> db -> get('tb_subak', $limit, $start) -> result();
    }
}

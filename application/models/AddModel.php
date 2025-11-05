<?php
class AddModel extends CI_Model {
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

    public function insert_tb_perahyangan_pura_bedugul_tidakada2($data) {
        $this->db->insert('tb_perahyangan_pura_bedugul_tidakada2', $data);
    }

    public function insert_tb_perahyangan_pura_bedugul_tidakada3($data) {
        $this->db->insert('tb_perahyangan_pura_bedugul_tidakada23', $data);
    }

    public function insert_tb_perahyangan_inventaris($data) {
        $this->db->insert('tb_inventaris', $data);
    }

    public function insert_tb_perahyangan_foto_pura($data) {
        $this->db->insert('tb_foto_pura', $data);
    }

    public function insert_tb_perahyangan_foto_pura2($data) {
        $this->db->insert('tb_foto_pura2', $data);
    }

    public function insert_tb_perahyangan_foto_pura3($data) {
        $this->db->insert('tb_foto_pura3', $data);
    }

    public function insert_tb_perahyangan_foto_pura4($data) {
        $this->db->insert('tb_foto_pura4', $data);
    }

    public function insert_tb_perahyangan_aci_aci_subak($data) {
        $this->db->insert('tb_aci_aci', $data);
    }

    public function insert_tb_pawongan($data) {
        $this->db->insert('tb_pawongan', $data);
    }

    public function insert_tb_pawongan_nama_perarem($data) {
        $this->db->insert('tb_pawongan_nama_perarem', $data);
    }
    
    public function insert_tb_pawongan_nama_penyakap($data) {
        $this->db->insert('tb_pawongan_nama_penyakap', $data);
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

    public function insert_tb_palemahan_hama_if_not_exists($data) {
        $this->db->where('id_palemahan', $data['id_palemahan']);
        $this->db->where('nama_hama', $data['nama_hama']);
        $query = $this->db->get('tb_palemahan_hama');
        if ($query->num_rows() == 0) {
            $this->db->insert('tb_palemahan_hama', $data);
        }
    }

    public function insert_tb_palemahan_bantuan_pemerintah($data) {
        $this->db->insert('tb_bantuan_pemerintah', $data);
    }

}
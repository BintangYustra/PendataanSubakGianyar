<?php
class ViewModel extends CI_Model {
     // MELIHAT DATA DI DATABASE
    public function get_all_subak() {
        return $this->db->get('tb_subak')->result();
    } // ===KHUSUS AGAR TAMPIL DAFTARNYA DI WEB 
    // (JANGAN DIHAPUS(ENTAH DIMANA BAGIAN INI DIPAKAI, KALAU DIHAPUS SEMUA SISTEM AKAN EROR))===

    public function get_subak_by_id($id_subak) {
        return $this->db->get_where('tb_subak', ['id_subak' => $id_subak])->row();
    }
    
    public function get_alamat_by_id($id_subak) {
        return $this->db->get_where('tb_alamat_subak', ['id_subak' => $id_subak])->row();
    }
    
    public function get_prajuru_by_id($id_subak) {
        return $this->db->get_where('tb_prajuru', ['id_subak' => $id_subak])->row();
    }

    public function get_all_prajuru() {
        return $this -> db -> get('tb_prajuru') -> result();
    }

    public function get_perahyangan_by_id($id_subak) {
        return $this->db->get_where('tb_perahyangan', ['id_subak' => $id_subak])->row();
    }

    public function get_perahyanganpurabedugulada_by_id($id_perahyangan_pura_bedugul_ada) {
        return $this->db->get_where('tb_perahyangan_pura_bedugul_ada', ['id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada])->row();
    }

    public function get_perahyanganpurabedugultidakada_by_id($id_perahyangan_pura_bedugul_tidakada) {
        return $this->db->get_where('tb_perahyangan_pura_bedugul_tidakada', ['id_perahyangan_pura_bedugul_tidakada' => $id_perahyangan_pura_bedugul_tidakada])->row();
    }

    public function get_perahyanganpurabedugultidakada2_by_id($id_perahyangan_pura_bedugul_tidakada2) {
        return $this->db->get_where('tb_perahyangan_pura_bedugul_tidakada2', ['id_perahyangan_pura_bedugul_tidakada2' => $id_perahyangan_pura_bedugul_tidakada2])->row();
    }

    public function get_perahyanganpurabedugultidakada3_by_id($id_perahyangan_pura_bedugul_tidakada3) {
        return $this->db->get_where('tb_perahyangan_pura_bedugul_tidakada23', ['id_perahyangan_pura_bedugul_tidakada3' => $id_perahyangan_pura_bedugul_tidakada3])->row();
    }

    public function get_perahyangan_inventaris_by_id($id_perahyangan_pura_bedugul_ada)
    {
        return $this->db->get_where('tb_inventaris', ['id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada])->result();
    }

    public function get_perahyangan_aci_aci_by_id($id_perahyangan_pura_bedugul_ada)
    {
        return $this->db->get_where('tb_aci_aci', ['id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada])->result();
    }

    public function get_perahyangan_foto_pura_by_id($id_perahyangan_pura_bedugul_ada)
    {
        return $this->db->get_where('tb_foto_pura', ['id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada])->result();
    }

    public function get_perahyangan_foto_pura_by_id2($id_perahyangan_pura_bedugul_tidakada)
    {
        return $this->db->get_where('tb_foto_pura2', ['id_perahyangan_pura_bedugul_tidakada' => $id_perahyangan_pura_bedugul_tidakada])->result();
    }

    public function get_pawongan_by_id($id_subak) {
        return $this->db->get_where('tb_pawongan', ['id_subak' => $id_subak])->row();
    }

    public function get_pawongan_nama_penyakap_by_id($id_pawongan) {
        return $this->db->get_where('tb_pawongan_nama_penyakap', ['id_pawongan' => $id_pawongan])->result();
    }

    public function get_pawongan_nama_perarem_by_id($id_pawongan) {
        return $this->db->get_where('tb_pawongan_nama_perarem', ['id_pawongan' => $id_pawongan])->result();
    }

    public function get_palemahan_by_id($id_subak) {
        return $this->db->get_where('tb_palemahan', ['id_subak' => $id_subak])->row();
    }

    public function get_palemahan_tanaman_pokok_by_id($id_palemahan) {
        return $this->db->get_where('tb_tanaman_pokok', ['id_palemahan' => $id_palemahan])->result();
    }

    public function get_palemahan_jenis_tanaman_pokok_by_id($id_palemahan) {
        return $this->db->get_where('tb_jenis_tanaman_pokok', ['id_palemahan' => $id_palemahan])->result();
    }

    public function get_palemahan_hama_by_id($id_palemahan) {
        return $this->db->get_where('tb_hama', ['id_palemahan' => $id_palemahan])->result();
    }

    public function get_palemahan_bantuan_pemerintah_by_id($id_palemahan) {
        return $this->db->get_where('tb_bantuan_pemerintah', ['id_palemahan' => $id_palemahan])->result();
    }

}
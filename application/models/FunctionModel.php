<?php
class FunctionModel extends CI_Model {
    // FUNGSI LAIN-LAIN
    public function get_total_subak() {
    return $this->db->count_all('tb_subak');
    }

    public function pagination($limit, $start)
    {
        return $this -> db -> get('tb_subak', $limit, $start) -> result();
    }

    public function count_belum_terverifikasi()
    {
        $this->db->where('verifikasi', 'Belum Terverifikasi');
        return $this->db->count_all_results('tb_subak');
    }

    public function count_verifikasi_ditolak()
    {
        $this->db->where('verifikasi', 'Data Ditolak');
        return $this->db->count_all_results('tb_subak');
    }

    public function count_verifikasi_sukses()
    {
        $this->db->where('verifikasi', 'Terverifikasi');
        return $this->db->count_all_results('tb_subak');
    }

    public function count_all_subak() {
    return $this->db->count_all('tb_subak');
    }

}
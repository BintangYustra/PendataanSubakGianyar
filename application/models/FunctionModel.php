<?php
class FunctionModel extends CI_Model {
    public function get_all_subak() {
        return $this->db->get('tb_subak')->result();
    } // ===KHUSUS AGAR TAMPIL DAFTARNYA DI WEB (JANGAN DIHAPUS(ENTAH DIMANA BAGIAN INI DIPAKAI, KALAU DIHAPUS SEMUA SISTEM AKAN EROR))===

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

    public function count_data_diperbarui()
    {
        $this->db->where('verifikasi', 'Data Diperbarui');
        return $this->db->count_all_results('tb_subak');
    }

    public function count_data_tidakvalid()
    {
        $this->db->where('verifikasi', 'Data Tidak Valid');
        return $this->db->count_all_results('tb_subak');
    }

    public function get_latest_subak($limit = 5)
    {
        return $this->db
            ->order_by('dibuat_pada', 'DESC')
            ->limit($limit)
            ->get('tb_subak')
            ->result();
    }

    public function get_latest_subak_update($limit = 5)
    {
        return $this->db
            ->order_by('diperbaharui_pada', 'DESC')
            ->limit($limit)
            ->get('tb_subak')
            ->result();
    }

}
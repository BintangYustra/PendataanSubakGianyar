<?php

class ExportModel extends CI_Model {
    public function get_tb_subak_export_detail() {
        $this->db->select('
            tb_subak.id_subak,
            tb_subak.nama_subak,
            tb_subak.kriteria_subak,
            tb_subak.nomor_akte_notaris,
            tb_subak.npwp,
            tb_subak.verifikasi,
            tb_subak.usul_saran_komentar,
            tb_subak.komentar_verifikator,
            tb_subak.tgl_ditambahkan,
            tb_subak.tgl_diupdate,
        ');
        $this->db->from('tb_subak');
        $this->db->join('tb_alamat_subak', 'tb_alamat_subak.id_alamat = ', 'left');
    }
}
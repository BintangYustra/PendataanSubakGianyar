<?php
class AddModel extends CI_Model {

    public function get_all_subak() {
        return $this->db->get('tb_subak')->result();
    } // ===KHUSUS AGAR TAMPIL DAFTARNYA DI WEB (JANGAN DIHAPUS(ENTAH DIMANA BAGIAN INI DIPAKAI, KALAU DIHAPUS SEMUA SISTEM AKAN EROR))===

    public function insert_tb_user($user) {
        $this->db->insert('user', $user);
        return $this->db->insert_id();
    }

    public function insert_tb_subak($subak) {
        $this->db->insert('tb_subak', $subak);
        return $this->db->insert_id();
    }

    public function insert_tb_alamat_subak($alamat) {
        $this->db->insert('tb_alamat_subak', $alamat);
    }

    public function insert_tb_prajuru($prajuru) {
        $this->db->insert('tb_prajuru', $prajuru);
    }

    public function insert_tb_perahyangan($perahyangan) {
        $this->db->insert('tb_perahyangan', $perahyangan);
    }

    // public function insert_tb_perahyangan_pura_bedugul_ada($data) {
    //     $this->db->insert('tb_perahyangan_pura_bedugul_ada', $data);
    // }

    // public function insert_tb_perahyangan_pura_bedugul_tidakada($data) {
    //     $this->db->insert('tb_perahyangan_pura_bedugul_tidakada', $data);
    // }

    // public function insert_tb_perahyangan_pura_bedugul_tidakada2($data) {
    //     $this->db->insert('tb_perahyangan_pura_bedugul_tidakada2', $data);
    // }

    // public function insert_tb_perahyangan_pura_bedugul_tidakada3($data) {
    //     $this->db->insert('tb_perahyangan_pura_bedugul_tidakada23', $data);
    // }

    // public function insert_tb_perahyangan_inventaris($data) {
    //     $this->db->insert('tb_perahyangan_inventaris', $data);
    // }

    public function insert_tb_perahyangan_foto_pura($data) {
        $this->db->insert('tb_perahyangan_foto', $data);
    }

    // public function insert_tb_perahyangan_foto_pura2($data) {
    //     $this->db->insert('tb_foto_pura2', $data);
    // }

    // public function insert_tb_perahyangan_foto_pura3($data) {
    //     $this->db->insert('tb_foto_pura3', $data);
    // }

    // public function insert_tb_perahyangan_foto_pura4($data) {
    //     $this->db->insert('tb_foto_pura4', $data);
    // }

    // public function insert_tb_perahyangan_aci_aci_subak($data) {
    //     $this->db->insert('tb_perahyangan_aci', $data);
    // }

    public function insert_tb_pawongan($pawongan) {
        $this->db->insert('tb_pawongan', $pawongan);
    }

    public function insert_tb_pawongan_nama_perarem($perarem) {
        $this->db->insert('tb_pawongan_nama_perarem', $perarem);
    }
    
    public function insert_tb_pawongan_nama_penyakap($penyakap) {
        $this->db->insert('tb_pawongan_nama_penyakap', $penyakap);
    }

    public function insert_tb_palemahan($palemahan) {
        $this->db->insert('tb_palemahan', $palemahan);
    }

    public function insert_tb_palemahan_tanaman_pokok($tanamanaPokok) {
        $this->db->insert('tb_tanaman_pokok', $tanamanaPokok);
    }

    public function insert_tb_palemahan_jenis_tanaman_pokok($jenisTanaman) {
        $this->db->insert('tb_jenis_tanaman_pokok', $jenisTanaman);
    }

    public function insert_tb_palemahan_hama($hama) {
        $this->db->insert('tb_hama', $hama);
    }

    public function insert_tb_palemahan_bantuan_pemerintah($bantuanPemerintah) {
        $this->db->insert('tb_bantuan_pemerintah', $bantuanPemerintah);
    }

}









    // public function insert_tb_palemahan_hama_if_not_exists($data) {
    //     $this->db->where('id_palemahan', $data['id_palemahan']);
    //     $this->db->where('nama_hama', $data['nama_hama']);
    //     $query = $this->db->get('tb_palemahan_hama');
    //     if ($query->num_rows() == 0) {
    //         $this->db->insert('tb_palemahan_hama', $data);
    //     }
    // }
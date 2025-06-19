<?php
class SubakModel extends CI_Model {

    // DATA MASUK KE DATABASE
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

    public function insert_tb_perahyangan_foto_pura($data) {
        $this->db->insert('tb_foto_pura', $data);
    }

    public function insert_tb_perahyangan_foto_pura2($data) {
        $this->db->insert('tb_foto_pura2', $data);
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

    public function insert_tb_palemahan_bantuan_pemerintah($data) {
        $this->db->insert('tb_bantuan_pemerintah', $data);
    }

    // UPDATE DATA DI DATABASE
    public function update_tb_subak($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->update('tb_subak', $data);
    }


    public function update_tb_alamat_subak($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_alamat_subak', $data);
    }

    public function update_tb_prajuru($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_prajuru', $data);
    }

    public function update_tb_perahyangan($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_prajuru', $data);
    }

    public function update_tb_perahyangan_pura_bedugul_ada($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_perahyangan_pura_bedugul_ada', $data);
    }

    public function update_tb_perahyangan_pura_bedugul_tidakada($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_perahyangan_pura_bedugul_tidakada', $data);
    }

    public function update_tb_perahyangan_inventaris($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_inventaris', $data);
    }

    public function update_tb_perahyangan_aci_aci_subak($id_aci_subak, $data)
    {
        $this->db->where('id_aci_subak', $id_aci_subak);
        return $this->db->replace('tb_perahyangan_aci_aci_subak', $data);
    }

    public function update_tb_perahyangan_foto_pura($id_foto_pura, $data)
    {
        $this->db->where('id_foto_pura', $id_foto_pura);
        return $this->db->replace('tb_perahyangan_foto_pura', $data);
    }

    public function update_tb_perahyangan_foto_pura2($id_foto_pura2, $data)
    {
        $this->db->where('id_foto_pura2', $id_foto_pura2);
        return $this->db->replace('tb_perahyangan_foto_pura2', $data);
    }

    public function update_tb_pawongan($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_pawongan', $data);
    }

    public function update_tb_pawongan_nama_perarem($id_nama_perarem, $data)
    {
        $this->db->where('id_nama_perarem', $id_nama_perarem);
        return $this->db->replace('tb_pawongan_nama_perarem', $data);
    }

    public function update_tb_pawongan_nama_penyakap($id_nama_penyakap, $data)
    {
        $this->db->where('id_nama_penyakap', $id_nama_penyakap);
        return $this->db->replace('tb_pawongan_nama_penyakap', $data);
    }

    public function update_tb_palemahan($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_palemahan', $data);
    }

    public function update_tb_palemahan_tanaman_pokok($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_tanaman_pokok', $data);
    }

    public function update_tb_palemahan_jenis_tanaman_pokok($id_subak, $data)
    {
        $this->db->where('id_subak', $id_subak);
        return $this->db->replace('tb_jenis_tanaman_pokok', $data);
    }

    public function update_tb_palemahan_hama($id_hama, $data)
    {
        $this->db->where('id_hama', $id_hama);
        return $this->db->replace('tb_palemahan_hama', $data);
    }

    public function update_tb_palemahan_bantuan_pemerintah($id_bantuan, $data)
    {
        $this->db->where('id_bantuan_pemerintah', $id_bantuan);
        return $this->db->replace('tb_palemahan_bantuan_pemerintah', $data);
    }

    // HAPUS DATA DI DATABASE

    // MELIHAT DATA DI DATABASE
    public function get_all_subak() {
        return $this->db->get('tb_subak')->result();
    } // ===KHUSUS AGAR TAMPIL DAFTARNYA DI WEB (JANGAN DIHAPUS)===

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

    public function get_perahyanganpurabedugulada_by_id($id_pura_bedugul_ada) {
        return $this->db->get_where('tb_perahyangan_pura_bedugul_ada', ['id_perahyangan_pura_bedugul_ada' => $id_pura_bedugul_ada])->row();
    }

    public function get_perahyanganpurabedugultidakada_by_id($id_perahyangan_pura_bedugul_tidakada) {
        return $this->db->get_where('tb_perahyangan_pura_bedugul_tidakada', ['id_perahyangan_pura_bedugul_tidakada' => $id_perahyangan_pura_bedugul_tidakada])->row();
    }

    public function get_perahyangan_inventaris_by_id($id_pura_bedugul_ada)
    {
        return $this->db->get_where('tb_inventaris', ['id_pura_bedugul_ada' => $id_pura_bedugul_ada])->result();
    }

    public function get_perahyangan_aci_aci_by_id($id_pura_bedugul_ada)
    {
        return $this->db->get_where('tb_aci_aci', ['id_pura_bedugul_ada' => $id_pura_bedugul_ada])->result();
    }

    public function get_perahyangan_foto_pura_by_id($id_pura_bedugul_ada)
    {
        return $this->db->get_where('tb_foto_pura', ['id_pura_bedugul_ada' => $id_pura_bedugul_ada])->result();
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

    // FUNGSI LAIN-LAIN
    public function get_total_subak() {
    return $this->db->count_all('tb_subak');
    }

    public function pagination($limit, $start)
    {
        return $this -> db -> get('tb_subak', $limit, $start) -> result();
    }
}

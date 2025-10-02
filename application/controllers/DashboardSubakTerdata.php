<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardSubakTerdata extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
        $this->load->library(['pagination', 'form_validation', 'session']);
        $this->load->helper(['url', 'security']);
        
        // Uncomment untuk proteksi login
        // if (!$this->session->userdata('logged_in')) {
        //     redirect('login');
        // }
    }
    
    /**
     * Halaman index dengan pagination
     */
    public function index() {
        $data['judul'] = 'Dashboard';
        
        // Konfigurasi pagination
        $config = $this->_get_pagination_config();
        $this->pagination->initialize($config);
        
        // Ambil data
        $data['start'] = $this->uri->segment(3) ?? 0;
        $data['totalsubak'] = $this->SubakModel->pagination($config['per_page'], $data['start']);
        $data['link'] = $this->pagination->create_links();
        
        // Load views
        $this->_load_dashboard_views('dashboard/dashboardsubakterdata', $data);
    }
    
    /**
     * View detail data subak
     */
    public function DashboardViewData($id_subak) {
        $data = $this->_get_complete_subak_data($id_subak);
        
        if (empty($data['subak'])) {
            show_404();
        }
        
        $this->load->view('dashboard/dashboardviewdata', $data);
    }
    
    /**
     * Halaman update data
     */
    public function MasukHalaman($id_subak) {
        $data = $this->_get_complete_subak_data($id_subak);
        
        if (empty($data['subak'])) {
            show_404();
        }
        
        $this->load->view('dashboard/dashboardupdatedata', $data);    
    }
    
    /**
     * Proses update data subak
     */
    public function DashboardUpdateDataSubak() {
        $id_subak = $this->input->post('id_subak');
        
        // Validasi
        if (!$this->_validate_update_form()) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('DashboardSubakTerdata/MasukHalaman/' . $id_subak);
            return;
        }
        
        // Mulai transaction
        $this->db->trans_start();
        
        try {
            // Cek status verifikasi sebelum update
            $current_status = $this->_get_current_verification_status($id_subak);
            
            // Update tabel-tabel utama
            $this->_update_main_tables($id_subak);
            
            // Update tabel-tabel relasi (array data)
            $this->_update_relation_tables($id_subak);
            
            // Reset verifikasi jika data yang terverifikasi diubah
            $this->_reset_verification_if_needed($id_subak, $current_status);
            
            // Complete transaction
            $this->db->trans_complete();
            
            if ($this->db->trans_status() === FALSE) {
                throw new Exception('Transaction failed');
            }
            
            // Pesan berbeda jika verifikasi direset
            if ($current_status == 'Terverifikasi') {
                $this->session->set_flashdata('success', 'Data berhasil diupdate. Status verifikasi telah direset ke "Belum Terverifikasi".');
            } else {
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }
            
        } catch (Exception $e) {
            log_message('error', 'Update failed: ' . $e->getMessage());
            $this->session->set_flashdata('error', 'Gagal update data: ' . $e->getMessage());
        }
        
        redirect('DashboardSubakTerdata');
    }
    
    // ========================================================================
    // PRIVATE HELPER METHODS
    // ========================================================================
    
    /**
     * Ambil semua data subak lengkap
     */
    private function _get_complete_subak_data($id_subak) {
        return [
            'subak' => $this->SubakModel->get_subak_by_id($id_subak),
            'alamat' => $this->SubakModel->get_alamat_by_id($id_subak),
            'prajuru' => $this->SubakModel->get_prajuru_by_id($id_subak),
            'perahyangan' => $this->SubakModel->get_perahyangan_by_id($id_subak),
            'perahyanganpurabedugulada' => $this->SubakModel->get_perahyanganpurabedugulada_by_id($id_subak),
            'perahyanganpurabeduguladaaciaci' => $this->SubakModel->get_perahyangan_aci_aci_by_id($id_subak),
            'perahyanganpurabeduguladainventaris' => $this->SubakModel->get_perahyangan_inventaris_by_id($id_subak),
            'perahyanganpurabeduguladafotopura' => $this->SubakModel->get_perahyangan_foto_pura_by_id($id_subak),
            'perahyanganpurabedugultidakada' => $this->SubakModel->get_perahyanganpurabedugultidakada_by_id($id_subak),
            'perahyanganpurabedugultidakada2' => $this->SubakModel->get_perahyanganpurabedugultidakada2_by_id($id_subak),
            'perahyanganpurabedugultidakada3' => $this->SubakModel->get_perahyanganpurabedugultidakada3_by_id($id_subak),
            'perahyanganpurabedugultidakadafotopura2' => $this->SubakModel->get_perahyangan_foto_pura_by_id2($id_subak),
            'pawongan' => $this->SubakModel->get_pawongan_by_id($id_subak),
            'pawongannamapenyakap' => $this->SubakModel->get_pawongan_nama_penyakap_by_id($id_subak),
            'pawongannamaperarem' => $this->SubakModel->get_pawongan_nama_perarem_by_id($id_subak),
            'palemahan' => $this->SubakModel->get_palemahan_by_id($id_subak),
            'palemahantanamanpokok' => $this->SubakModel->get_palemahan_tanaman_pokok_by_id($id_subak),
            'palemahanjenistanamanpokok' => $this->SubakModel->get_palemahan_jenis_tanaman_pokok_by_id($id_subak),
            'palemahanhama' => $this->SubakModel->get_palemahan_hama_by_id($id_subak),
            'palemahanbantaunpemerintah' => $this->SubakModel->get_palemahan_bantuan_pemerintah_by_id($id_subak),
        ];
    }
    
    /**
     * Konfigurasi pagination
     */
    private function _get_pagination_config() {
        $total_rows = $this->SubakModel->count_all_subak(); // Method ini harus ditambahkan di model
        
        $config['base_url'] = base_url('DashboardSubakTerdata/index');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 50;
        $config['uri_segment'] = 3;
        
        // Styling pagination (Bootstrap 4/5)
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = ['class' => 'page-link'];
        
        return $config;
    }
    
    /**
     * Load dashboard views
     */
    private function _load_dashboard_views($content_view, $data = []) {
        $this->load->view('templates/dashboard/headerdashboard', $data);
        $this->load->view('templates/dashboard/sidepaneldashboard');
        $this->load->view($content_view, $data);
        $this->load->view('templates/dashboard/footerdashboard');
    }
    
    /**
     * Validasi form update
     */
    private function _validate_update_form() {
        $this->form_validation->set_rules('id_subak', 'ID Subak', 'required|trim');
        $this->form_validation->set_rules('nama_subak', 'Nama Subak', 'trim');
        $this->form_validation->set_rules('pekaseh_hp_wa', 'No HP Pekaseh', 'trim|numeric');
        $this->form_validation->set_rules('petajuh_hp_wa', 'No HP Petajuh', 'trim|numeric');
        $this->form_validation->set_rules('penyarikan_hp_wa', 'No HP Penyarikan', 'trim|numeric');
        
        return $this->form_validation->run();
    }
    
    /**
     * Helper untuk prepare data update (hanya field yang diisi)
     */
    private function _prepare_update_data($fields) {
        $data = [];
        foreach ($fields as $field) {
            $value = $this->input->post($field);
            if (!empty($value) || $value === '0') {
                $data[$field] = $this->security->xss_clean($value);
            }
        }
        return $data;
    }
    
    /**
     * Update semua tabel utama
     */
    private function _update_main_tables($id_subak) {
        // Update tb_subak
        $subak_fields = ['nama_subak', 'kriteria_subak', 'nomor_akte_notaris', 'npwp', 'verifikasi'];
        $update_subak = $this->_prepare_update_data($subak_fields);
        if (!empty($update_subak)) {
            $this->SubakModel->update_tb_subak($id_subak, $update_subak);
        }
        
        // Update tb_alamat_subak
        $alamat_fields = ['br_lingkungan_subak', 'desa_subak', 'kecamatan_subak', 'kabupaten_subak', 'kode_pos'];
        $update_alamat = $this->_prepare_update_data($alamat_fields);
        if (!empty($update_alamat)) {
            $this->SubakModel->update_tb_alamat_subak($id_subak, $update_alamat);
        }
        
        // Update tb_prajuru
        $prajuru_fields = [
            'masa_bhakti_ayahan_start', 'masa_bhakti_ayahan_end',
            'pekaseh_nama', 'pekaseh_npwp', 'pekaseh_hp_wa',
            'petajuh_nama', 'petajuh_npwp', 'petajuh_hp_wa',
            'penyarikan_nama', 'penyarikan_npwp', 'penyarikan_hp_wa'
        ];
        $update_prajuru = $this->_prepare_update_data($prajuru_fields);
        if (!empty($update_prajuru)) {
            $this->SubakModel->update_tb_prajuru($id_subak, $update_prajuru);
        }
        
        // Update tb_perahyangan
        $perahyangan_fields = ['ketersediaan_pura_bedugul'];
        $update_perahyangan = $this->_prepare_update_data($perahyangan_fields);
        if (!empty($update_perahyangan)) {
            $this->SubakModel->update_tb_perahyangan($id_subak, $update_perahyangan);
        }
        
        // Update tb_perahyangan_pura_bedugul_ada
        $pura_fields = [
            'nama_pura', 'pura_bedugul_disungsung', 'pura_bedugul_disungsung_lain',
            'alamat_pura_bedugul', 'piodalan_wali_pertahun', 'hari_piodalan_wali', 'jumlah_pelinggih'
        ];
        $update_pura = $this->_prepare_update_data($pura_fields);
        if (!empty($update_pura)) {
            $this->SubakModel->update_tb_perahyangan_pura_bedugul_ada($id_subak, $update_pura);
        }
        
        // Update tb_pawongan
        $pawongan_fields = [
            'jumlah_krama_pemilik_lahan', 'jumlah_krama_penyakap',
            'awig_awig', 'perarem', 'perarem_alih_fungsi'
        ];
        $update_pawongan = $this->_prepare_update_data($pawongan_fields);
        if (!empty($update_pawongan)) {
            $this->SubakModel->update_tb_pawongan($id_subak, $update_pawongan);
        }
        
        // Update tb_palemahan
        $palemahan_fields = [
            'luas_lahan_awal_ha', 'luas_lahan_sekarang_ha',
            'panjang_saluran_irigasi_tersier_ml', 'panjang_jalan_usaha_tani_ml',
            'bale_timbang', 'batas_wilayah_subak_utara', 'batas_wilayah_subak_timur',
            'batas_wilayah_subak_selatan', 'batas_wilayah_subak_barat',
            'sumber_aliran_air_das', 'jumlah_dam', 'lokasi_dam',
            'jumlah_temukuaya', 'lokasi_temukuaya', 'masa_musim_tanam_pertahun', 'tanaman_penyela'
        ];
        $update_palemahan = $this->_prepare_update_data($palemahan_fields);
        if (!empty($update_palemahan)) {
            $this->SubakModel->update_tb_palemahan($id_subak, $update_palemahan);
        }
    }
    
    /**
     * Update tabel-tabel relasi (one-to-many)
     */
    private function _update_relation_tables($id_subak) {
        // Ambil foreign keys
        $id_pawongan = $this->_get_pawongan_id($id_subak);
        $id_palemahan = $this->_get_palemahan_id($id_subak);
        $id_perahyangan_pura_bedugul_ada = $this->_get_pura_bedugul_ada_id($id_subak);
        
        // Update inventaris pura
        $this->_update_inventaris($id_perahyangan_pura_bedugul_ada);
        
        // Update aci-aci
        $this->_update_aci_aci($id_perahyangan_pura_bedugul_ada);
        
        // Update nama penyakap
        $this->_update_nama_penyakap($id_pawongan);
        
        // Update nama perarem
        $this->_update_nama_perarem($id_pawongan);
        
        // Update tanaman pokok
        $this->_update_tanaman_pokok($id_palemahan);
        
        // Update jenis tanaman pokok
        $this->_update_jenis_tanaman_pokok($id_palemahan);
        
        // Update hama
        $this->_update_hama($id_palemahan);
        
        // Update bantuan pemerintah
        $this->_update_bantuan_pemerintah($id_palemahan);
    }
    
    /**
     * Get ID helper methods
     */
    private function _get_pawongan_id($id_subak) {
        $row = $this->SubakModel->get_pawongan_by_id($id_subak);
        return $row ? $row->id_pawongan : null;
    }
    
    private function _get_palemahan_id($id_subak) {
        $row = $this->SubakModel->get_palemahan_by_id($id_subak);
        return $row ? $row->id_palemahan : null;
    }
    
    private function _get_pura_bedugul_ada_id($id_subak) {
        $row = $this->SubakModel->get_perahyanganpurabedugulada_by_id($id_subak);
        return $row ? $row->id_perahyangan_pura_bedugul_ada : null;
    }
    
    /**
     * Get current verification status
     */
    private function _get_current_verification_status($id_subak) {
        $subak = $this->SubakModel->get_subak_by_id($id_subak);
        return $subak ? $subak->verifikasi : null;
    }
    
    /**
     * Reset verifikasi ke "Belum Terverifikasi" jika data sudah terverifikasi diubah
     */
    private function _reset_verification_if_needed($id_subak, $current_status) {
        // Hanya reset jika status saat ini adalah "Terverifikasi"
        if (in_array($current_status, ['Terverifikasi', 'terverifikasi', 'Diterima', 'diterima'])) {
            
            // Cek apakah user mengubah status verifikasi secara manual
            $manual_verification = $this->input->post('verifikasi');
            
            // Jika user tidak mengubah verifikasi secara manual, auto-reset
            if (empty($manual_verification) || $manual_verification == $current_status) {
                $this->SubakModel->update_tb_subak($id_subak, [
                    'verifikasi' => 'Belum Terverifikasi'
                ]);
            }
        }
    }
    
    /**
     * Update inventaris
     */
    private function _update_inventaris($id_perahyangan_pura_bedugul_ada) {
        if (!$id_perahyangan_pura_bedugul_ada) return;
        
        $inventaris = $this->input->post('inventaris');
        $data_inventaris = [];
        
        if (!empty($inventaris) && is_array($inventaris)) {
            foreach ($inventaris as $item) {
                if (!empty(trim($item))) {
                    $data_inventaris[] = ['inventaris' => $this->security->xss_clean($item)];
                }
            }
        }
        
        if (!empty($data_inventaris)) {
            $this->SubakModel->update_inventaris($id_perahyangan_pura_bedugul_ada, $data_inventaris);
        }
    }
    
    /**
     * Update aci-aci
     */
    private function _update_aci_aci($id_perahyangan_pura_bedugul_ada) {
        if (!$id_perahyangan_pura_bedugul_ada) return;
        
        $aci_aci_subak = $this->input->post('aci_aci_subak');
        $data_aci_aci = [];
        
        if (!empty($aci_aci_subak) && is_array($aci_aci_subak)) {
            foreach ($aci_aci_subak as $item) {
                if (!empty(trim($item))) {
                    $data_aci_aci[] = ['aci_aci_subak' => $this->security->xss_clean($item)];
                }
            }
        }
        
        if (!empty($data_aci_aci)) {
            $this->SubakModel->update_aci_aci($id_perahyangan_pura_bedugul_ada, $data_aci_aci);
        }
    }
    
    /**
     * Update nama penyakap
     */
    private function _update_nama_penyakap($id_pawongan) {
        if (!$id_pawongan) return;
        
        $nama_penyakap = $this->input->post('nama_penyakap');
        $tingkat_pendidikan = $this->input->post('tingkat_pendidikan_penyakap');
        $data_penyakap = [];
        
        if (!empty($nama_penyakap) && is_array($nama_penyakap)) {
            foreach ($nama_penyakap as $i => $nama) {
                if (!empty(trim($nama)) || !empty($tingkat_pendidikan[$i])) {
                    $data_penyakap[] = [
                        'nama_penyakap' => $this->security->xss_clean($nama),
                        'tingkat_pendidikan_penyakap' => $this->security->xss_clean($tingkat_pendidikan[$i] ?? '')
                    ];
                }
            }
        }
        
        if (!empty($data_penyakap)) {
            $this->SubakModel->update_nama_penyakap($id_pawongan, $data_penyakap);
        }
    }
    
    /**
     * Update nama perarem
     */
    private function _update_nama_perarem($id_pawongan) {
        if (!$id_pawongan) return;
        
        $nama_perarem = $this->input->post('nama_perarem');
        $data_perarem = [];
        
        if (!empty($nama_perarem) && is_array($nama_perarem)) {
            foreach ($nama_perarem as $item) {
                if (!empty(trim($item))) {
                    $data_perarem[] = ['nama_perarem' => $this->security->xss_clean($item)];
                }
            }
        }
        
        if (!empty($data_perarem)) {
            $this->SubakModel->update_nama_perarem($id_pawongan, $data_perarem);
        }
    }
    
    /**
     * Update tanaman pokok
     */
    private function _update_tanaman_pokok($id_palemahan) {
        if (!$id_palemahan) return;
        
        $tanaman_pokok = $this->input->post('tanaman_pokok');
        $data_tanaman = [];
        
        if (!empty($tanaman_pokok) && is_array($tanaman_pokok)) {
            foreach ($tanaman_pokok as $item) {
                if (!empty(trim($item))) {
                    $data_tanaman[] = ['tanaman_pokok' => $this->security->xss_clean($item)];
                }
            }
        }
        
        if (!empty($data_tanaman)) {
            $this->SubakModel->update_tanaman_pokok($id_palemahan, $data_tanaman);
        }
    }
    
    /**
     * Update jenis tanaman pokok
     */
    private function _update_jenis_tanaman_pokok($id_palemahan) {
        if (!$id_palemahan) return;
        
        $jenis_tanaman = $this->input->post('jenis_tanaman_pokok');
        $data_jenis = [];
        
        if (!empty($jenis_tanaman) && is_array($jenis_tanaman)) {
            foreach ($jenis_tanaman as $item) {
                if (!empty(trim($item))) {
                    $data_jenis[] = ['jenis_tanaman_pokok' => $this->security->xss_clean($item)];
                }
            }
        }
        
        if (!empty($data_jenis)) {
            $this->SubakModel->update_jenis_tanaman_pokok($id_palemahan, $data_jenis);
        }
    }
    
    /**
     * Update hama
     */
    private function _update_hama($id_palemahan) {
        if (!$id_palemahan) return;
        
        $hama = $this->input->post('nama_hama');
        $data_hama = [];
        
        if (!empty($hama) && is_array($hama)) {
            foreach ($hama as $item) {
                if (!empty(trim($item))) {
                    $data_hama[] = ['nama_hama' => $this->security->xss_clean($item)];
                }
            }
        }
        
        if (!empty($data_hama)) {
            $this->SubakModel->update_hama($id_palemahan, $data_hama);
        }
    }
    
    /**
     * Update bantuan pemerintah
     */
    private function _update_bantuan_pemerintah($id_palemahan) {
        if (!$id_palemahan) return;
        
        $nama_bantuan = $this->input->post('nama_bantuan');
        $tahun_bantuan = $this->input->post('tahun_bantuan');
        $nilai_bantuan = $this->input->post('nilai_rp_bantuan');
        $data_bantuan = [];
        
        if (!empty($nama_bantuan) && is_array($nama_bantuan)) {
            foreach ($nama_bantuan as $i => $nama) {
                if (!empty(trim($nama)) || !empty($tahun_bantuan[$i]) || !empty($nilai_bantuan[$i])) {
                    $data_bantuan[] = [
                        'nama_bantuan' => $this->security->xss_clean($nama),
                        'tahun_bantuan' => $this->security->xss_clean($tahun_bantuan[$i] ?? ''),
                        'nilai_rp_bantuan' => $this->security->xss_clean($nilai_bantuan[$i] ?? '')
                    ];
                }
            }
        }
        
        if (!empty($data_bantuan)) {
            $this->SubakModel->update_bantuan_pemerintah($id_palemahan, $data_bantuan);
        }
    }
}
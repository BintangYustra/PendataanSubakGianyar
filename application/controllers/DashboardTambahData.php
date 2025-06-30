<?php
class DashboardTambahData extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
    }

    public function index() {
        $data['judul'] = 'Dashboard';
        $this->load->view('templates/dashboard/headerdashboard', $data);
        $this->load->view('templates/dashboard/sidepaneldashboard');
        $this->load->view('dashboard/dashboardtambahdata');
        $this->load->view('templates/dashboard/footerdashboard');
    }

    public function add_data() {
        // SUBAK
        $data_subak = [
            'nama_subak' => $this->input->post('nama_subak'),
            'kriteria_subak' => $this->input->post('kriteria_subak'),
            'nomor_akte_notaris' => $this->input->post('nomor_akte_notaris'),
            'npwp' => $this->input->post('npwp'),
            'verifikasi' => $this->input->post('verifikasi'),
        ];
        $id_subak = $this->SubakModel->insert_tb_subak($data_subak);

        // ALAMAT SUBAK
        $data_alamat = [
            'id_subak' => $id_subak,
            'br_lingkungan_subak' => $this->input->post('br_lingkungan_subak'),
            'desa_subak' => $this->input->post('desa_subak'),
            'kecamatan_subak' => $this->input->post('kecamatan_subak'),
            'kabupaten_subak' => $this->input->post('kabupaten_subak'),
            'kode_pos' => $this->input->post('kode_pos')
        ];
        $this->SubakModel->insert_tb_alamat_subak($data_alamat);

        // PRAJURU
        $data_prajuru = [
            'id_subak' => $id_subak,
            'masa_bhakti_ayahan_start' => $this->input->post('masa_bhakti_ayahan_start'),
            'masa_bhakti_ayahan_end' => $this->input->post('masa_bhakti_ayahan_end'),
            'pekaseh_nama' => $this->input->post('pekaseh_nama'),
            'pekaseh_npwp' => $this->input->post('pekaseh_npwp'),
            'pekaseh_hp_wa' => $this->input->post('pekaseh_hp_wa'),
            'petajuh_nama' => $this->input->post('petajuh_nama'),
            'petajuh_npwp' => $this->input->post('petajuh_npwp'),
            'petajuh_hp_wa' => $this->input->post('petajuh_hp_wa'),
            'penyarikan_nama' => $this->input->post('penyarikan_nama'),
            'penyarikan_npwp' => $this->input->post('penyarikan_npwp'),
            'penyarikan_hp_wa' => $this->input->post('penyarikan_hp_wa'),
        ];
        $this->SubakModel->insert_tb_prajuru($data_prajuru);
                
        // PERAHYANGAN
        $data_perahyangan = [
            'id_subak' => $id_subak,
            'ketersediaan_pura_bedugul' => $this->input->post('ketersediaan_pura_bedugul'),
        ];
        $this->SubakModel->insert_tb_perahyangan($data_perahyangan);
        $id_perahyangan = $this->db->insert_id();

        // PERAHYANGAN PURA BEDUGUL ADA
        $data_perahyangan_pura_bedugul_ada = [
            'id_perahyangan' => $id_perahyangan,
            'nama_pura' => $this->input->post('nama_pura'),
            'pura_bedugul_disungsung' => $this->input->post('pura_bedugul_disungsung'),
            'pura_bedugul_disungsung_lain' => $this->input->post('pura_bedugul_disungsung_lain'),
            'alamat_pura_bedugul' => $this->input->post('alamat_pura_bedugul'),
            'piodalan_wali_pertahun' => $this->input->post('piodalan_wali_pertahun'),
            'hari_piodalan_wali' => $this->input->post('hari_piodalan_wali'),
            'jumlah_pelinggih' => $this->input->post('jumlah_pelinggih'),        
        ];
        $this->SubakModel->insert_tb_perahyangan_pura_bedugul_ada($data_perahyangan_pura_bedugul_ada);
        $id_perahyangan_pura_bedugul_ada = $this->db->insert_id();

        // PERAHYANGAN PURA BEDUGUL TIDAK ADA
        $data_perahyangan_pura_bedugul_tidakada = [
            'id_perahyangan' => $id_perahyangan,
            'nama_pura2' => $this->input->post('nama_pura2'),
            'pura_bedugul_disungsung2' => $this->input->post('pura_bedugul_disungsung2'),
            'pura_bedugul_disungsung_lain2' => $this->input->post('pura_bedugul_disungsung_lain2'),
            'alamat_pura_bedugul2' => $this->input->post('alamat_pura_bedugul2'),
            'piodalan_wali_pertahun2' => $this->input->post('piodalan_wali_pertahun2'),
            'hari_piodalan_wali2' => $this->input->post('hari_piodalan_wali2'),        
        ];
        $this->SubakModel->insert_tb_perahyangan_pura_bedugul_tidakada($data_perahyangan_pura_bedugul_tidakada);
        // PERAHYANGAN PURA BEDUGUL TIDAK ADA
        $data_perahyangan_pura_bedugul_tidakada2 = [
            'id_perahyangan' => $id_perahyangan,
            'nama_pura23' => $this->input->post('nama_pura23'),
            'pura_bedugul_disungsung23' => $this->input->post('pura_bedugul_disungsung23'),
            'pura_bedugul_disungsung_lain23' => $this->input->post('pura_bedugul_disungsung_lain23'),
            'alamat_pura_bedugul23' => $this->input->post('alamat_pura_bedugul23'),
            'piodalan_wali_pertahun23' => $this->input->post('piodalan_wali_pertahun23'),
            'hari_piodalan_wali23' => $this->input->post('hari_piodalan_wali23'),        
        ];
        $this->SubakModel->insert_tb_perahyangan_pura_bedugul_tidakada2($data_perahyangan_pura_bedugul_tidakada2);
        // PERAHYANGAN PURA BEDUGUL TIDAK ADA
        $data_perahyangan_pura_bedugul_tidakada3 = [
            'id_perahyangan' => $id_perahyangan,
            'nama_pura24' => $this->input->post('nama_pura24'),
            'pura_bedugul_disungsung24' => $this->input->post('pura_bedugul_disungsung24'),
            'pura_bedugul_disungsung_lain24' => $this->input->post('pura_bedugul_disungsung_lain24'),
            'alamat_pura_bedugul24' => $this->input->post('alamat_pura_bedugul24'),
            'piodalan_wali_pertahun24' => $this->input->post('piodalan_wali_pertahun24'),
            'hari_piodalan_wali24' => $this->input->post('hari_piodalan_wali24'),        
        ];
        $this->SubakModel->insert_tb_perahyangan_pura_bedugul_tidakada3($data_perahyangan_pura_bedugul_tidakada3);

        // PERAHYANGAN INVENTARIS
        $inventaris_array = $this->input->post('inventaris');
        $inventaris_lain = $this->input->post('inventaris_lain');
        if ($inventaris_array) {
            foreach ($inventaris_array as $val) {
                if (!empty($val)) {
                    $this->SubakModel->insert_tb_perahyangan_inventaris([
                        'id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada,
                        'inventaris' => $val
                    ]);
                }
            }
        }
        if (!empty($inventaris_lain)) {
            $this->SubakModel->insert_tb_perahyangan_inventaris([
                'id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada,
                'inventaris' => $inventaris_lain
            ]);
        }

        // PERAHYANGAN ACI-ACI
        $aci_aci_subak = $this->input->post('aci_aci_subak');
        if (!empty($aci_aci_subak) && is_array($aci_aci_subak)) {
            foreach ($aci_aci_subak as $val) {
                if (trim($val) !== '') {
                    $this->SubakModel->insert_tb_perahyangan_aci_aci_subak([
                        'id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada,
                        'aci_aci_subak' => $val
                    ]);
                }
            }
        }
        
        // UPLOAD FOTO PURA
        $files = $_FILES;
        $count = count($_FILES['foto_pura']['name']);
        $config['upload_path'] = './application/upload/foto_pura/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 10000;
        $this->load->library('upload');
        for ($i = 0; $i < $count; $i++) {
            if (!empty($_FILES['foto_pura']['name'][$i])) {
            // Set file untuk diupload satu per satu
                $_FILES['file']['name']     = $files['foto_pura']['name'][$i];
                $_FILES['file']['type']     = $files['foto_pura']['type'][$i];
                $_FILES['file']['tmp_name'] = $files['foto_pura']['tmp_name'][$i];
                $_FILES['file']['error']    = $files['foto_pura']['error'][$i];
                $_FILES['file']['size']     = $files['foto_pura']['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $uploaded_data = $this->upload->data();
                    $nama_file = $uploaded_data['file_name'];

                // Simpan ke database
                    $this->SubakModel->insert_tb_perahyangan_foto_pura([
                        'id_perahyangan_pura_bedugul_ada' => $id_perahyangan_pura_bedugul_ada,
                        'foto_pura' => $nama_file
                    ]);
                } else {
                    // Jika gagal upload, tampilkan error (bisa juga disimpan ke log)
                    echo $this->upload->display_errors();
                }
            }
        }

        




















        // PAWONGAN
        $data_pawongan = [
            'id_subak' => $id_subak,
            'jumlah_krama_pemilik_lahan'=> $this->input->post('jumlah_krama_pemilik_lahan'),
            'jumlah_krama_penyakap' => $this->input->post('jumlah_krama_penyakap'),
            'awig_awig' => $this->input->post('awig_awig'),
            'perarem' => $this->input->post('perarem'),
            'perarem_alih_fungsi' => $this->input->post('perarem_alih_fungsi'),
        ];

        $this->SubakModel->insert_tb_pawongan($data_pawongan);
        $id_pawongan = $this->db->insert_id();

        // PAWONGAN NAMA PERAREM
        $data_pawongan_nama_perarem = $this->input->post('nama_perarem');
        if (!empty($data_pawongan_nama_perarem)) {
            foreach ($data_pawongan_nama_perarem as $val) {
                if (!empty($val)) {
                    $this->SubakModel->insert_tb_pawongan_nama_perarem([
                        'id_pawongan'   => $id_pawongan,
                        'nama_perarem'  => $val,
                    ]);
                }
            }
        }

        // PAWONGAN NAMA PENYAKAP
        $nama_penyakap_list = $this->input->post('nama_penyakap');
        $pendidikan_penyakap_list = $this->input->post('tingkat_pendidikan_penyakap');

        if (!empty($nama_penyakap_list) && is_array($nama_penyakap_list)) {
            foreach ($nama_penyakap_list as $i => $nama_penyakap) {
                if (!empty($nama_penyakap)) {
                    $this->SubakModel->insert_tb_pawongan_nama_penyakap([
                        'id_pawongan'                => $id_pawongan,
                        'nama_penyakap'             => $nama_penyakap,
                        'tingkat_pendidikan_penyakap' => $pendidikan_penyakap_list[$i] ?? null,
                    ]);
                }
            }
        }

        // PALEMAHAN
        $data_palemahan = [
            'id_subak' => $id_subak,
            'luas_lahan_awal_ha' => $this->input->post('luas_lahan_awal_ha'),
            'luas_lahan_sekarang_ha' => $this->input->post('luas_lahan_sekarang_ha'),
            'panjang_saluran_irigasi_tersier_ml' => $this->input->post('panjang_saluran_irigasi_tersier_ml'),
            'panjang_jalan_usaha_tani_ml' => $this->input->post('panjang_jalan_usaha_tani_ml'),
            'bale_timbang' => $this->input->post('bale_timbang'),
            'batas_wilayah_subak_utara' => $this->input->post('batas_wilayah_subak_utara'),
            'batas_wilayah_subak_timur' => $this->input->post('batas_wilayah_subak_timur'),
            'batas_wilayah_subak_selatan' => $this->input->post('batas_wilayah_subak_selatan'),
            'batas_wilayah_subak_barat' => $this->input->post('batas_wilayah_subak_barat'),
            'sumber_aliran_air_das' => $this->input->post('sumber_aliran_air_das'),
            'jumlah_dam' => $this->input->post('jumlah_dam'),
            'lokasi_dam' => $this->input->post('lokasi_dam'),
            'jumlah_temukuaya' => $this->input->post('jumlah_temukuaya'),
            'lokasi_temukuaya' => $this->input->post('lokasi_temukuaya'),
            'masa_musim_tanam_pertahun' => $this->input->post('masa_musim_tanam_pertahun'),
            'tanaman_penyela' => $this->input->post('tanaman_penyela'),
        ];
        $this->SubakModel->insert_tb_palemahan($data_palemahan);
        $id_palemahan = $this->db->insert_id();
        
        // PALEMAHAN TANAMAN POKOK
        $tanaman_pokok = $this->input->post('tanaman_pokok');
        if ($tanaman_pokok) {
            foreach ($tanaman_pokok as $val) {
                $this->SubakModel->insert_tb_palemahan_tanaman_pokok([
                    'id_palemahan' => $id_palemahan,
                    'tanaman_pokok' => $val
                ]);
            }
        }

        // PALEMAHAN JENIS TANAMAN POKOK
        $jenis_tanaman_pokok = $this->input->post('jenis_tanaman_pokok');
        if ($jenis_tanaman_pokok) {
            foreach ($jenis_tanaman_pokok as $val) {
                $this->SubakModel->insert_tb_palemahan_jenis_tanaman_pokok([
                    'id_palemahan' => $id_palemahan,
                    'jenis_tanaman_pokok' => $val,
                ]);
            }
        }
        // PALEMAHAN HAMA
        $nama_hama = $this->input->post('nama_hama');
        if ($nama_hama) {
            foreach ($nama_hama as $val) {
                $this->SubakModel->insert_tb_palemahan_hama([
                    'id_palemahan' => $id_palemahan,
                    'nama_hama' => $val
                ]);
            }
        }

        // PALEMAHAN BANTUAN PEMERINTAH
        $nama_bantuan = $this->input->post('nama_bantuan');
        $tahun_bantuan = $this->input->post('tahun_bantuan');
        $nilai_rp_bantuan = $this->input->post('nilai_rp_bantuan');
        foreach ($nama_bantuan as $index => $nama) {
            if (!empty($nama) || !empty($tahun_bantuan[$index]) || !empty($nilai_rp_bantuan[$index])) {
                $data = [
                    'id_palemahan' => $id_palemahan,
                    'nama_bantuan' => $nama,
                    'tahun_bantuan' => $tahun_bantuan[$index],
                    'nilai_rp_bantuan' => $nilai_rp_bantuan[$index]
                ];
                $this->SubakModel->insert_tb_palemahan_bantuan_pemerintah($data);
            }
        }

        redirect(base_url('DashboardHome'));
    }
}

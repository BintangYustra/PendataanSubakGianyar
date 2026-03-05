<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExportCSV extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('FunctionModel');
        $this->load->model('ExportModel');
        $this->load->dbutil();
    }

    public function csv_export() {
        $data = $this->FunctionModel->get_all_subak();
        
        $filename = 'DataSubak_' . date('Ymd') . '.csv';
        
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);
        
        $output = fopen('php://output', 'w');
        
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
        
        fputcsv($output, array(
            'ID', 
            'Nama Subak', 
            'Kriteria Subak', 
            'No. Akte Notaris',
            'NPWP',
            'Verifikasi',
            'Usul, Saran, dan Komentar',
            'Komentar Verifikator',
            'Tanggal Ditambahkan',
            'Tanggal Diupdate',
            // 'Alamat Subak',
            // 'Banjar/ Lingkungan Subak',
            // 'Desa Subak',
            // 'Kecamatan Subak',
            // 'Kode Pos',
            
            ));
        
        // Isi data
        foreach ($data as $row) {
            fputcsv($output, array(
                $row->id_subak,
                $row->nama_subak,
                $row->kriteria_subak,
                $row->nomor_akte_notaris,
                $row->npwp,
                $row->verifikasi,
                $row->usul_saran_komentar,
                $row->tgl_ditambahkan,
                $row->tgl_diupdate,
                // $row->br_lingkungan_subak,
                // $row->desa_subak,
                // $row->kecamatan_subak,
                // $row->kode_pos,
            ));
        }
        
        fclose($output);
        exit();
    }
}
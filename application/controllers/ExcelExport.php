<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ExcelExport Controller
 * Export data subak ke format Excel dengan formatting
 * 
 * REQUIREMENTS:
 * - PhpSpreadsheet library (install via composer)
 * - composer require phpoffice/phpspreadsheet
 */

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class ExcelExport extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
        $this->load->helper(['url', 'download']);
    }

    /**
     * Export detail subak single
     */
    public function export_detail($id_subak) {
        // Ambil data
        $data = $this->_get_complete_data($id_subak);
        
        if (empty($data['subak'])) {
            show_404();
        }

        // Create spreadsheet
        $spreadsheet = new Spreadsheet();
        
        // Sheet 1: Informasi Umum
        $this->_create_info_sheet($spreadsheet, $data);
        
        // Sheet 2: Alamat & Prajuru
        $this->_create_alamat_prajuru_sheet($spreadsheet, $data);
        
        // Sheet 3: Pawongan
        $this->_create_pawongan_sheet($spreadsheet, $data);
        
        // Sheet 4: Palemahan
        $this->_create_palemahan_sheet($spreadsheet, $data);
        
        // Sheet 5: Data Relasi (Penyakap, Tanaman, dll)
        $this->_create_relasi_sheet($spreadsheet, $data);

        // Set active sheet to first
        $spreadsheet->setActiveSheetIndex(0);

        // Generate filename
        $filename = 'Detail_Subak_' . $this->_sanitize_filename($data['subak']->nama_subak) . '_' . date('Ymd') . '.xlsx';

        // Output
        $this->_output_excel($spreadsheet, $filename);
    }

    /**
     * Export all subak (summary)
     */
    public function export_all() {
        // Ambil semua data subak
        $subaks = $this->SubakModel->get_all_subak_with_details();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Daftar Subak');

        // Header
        $headers = [
            'No', 'ID Subak', 'Nama Subak', 'Kriteria', 'Desa', 'Kecamatan', 
            'Verifikasi', 'Luas Lahan (Ha)', 'Jumlah Krama', 'Created At'
        ];

        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '1', $header);
            $col++;
        }

        // Style header
        $sheet->getStyle('A1:J1')->applyFromArray([
            'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
            'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '4472C4']],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
        ]);

        // Data
        $row = 2;
        $no = 1;
        foreach ($subaks as $subak) {
            $sheet->setCellValue('A' . $row, $no++);
            $sheet->setCellValue('B' . $row, $subak->id_subak);
            $sheet->setCellValue('C' . $row, $subak->nama_subak);
            $sheet->setCellValue('D' . $row, $subak->kriteria_subak);
            $sheet->setCellValue('E' . $row, $subak->desa_subak ?? '-');
            $sheet->setCellValue('F' . $row, $subak->kecamatan_subak ?? '-');
            $sheet->setCellValue('G' . $row, $subak->verifikasi);
            $sheet->setCellValue('H' . $row, $subak->luas_lahan_sekarang_ha ?? 0);
            $sheet->setCellValue('I' . $row, $subak->jumlah_krama_pemilik_lahan ?? 0);
            $sheet->setCellValue('J' . $row, $subak->created_at ?? '-');
            
            // Color code verifikasi
            $color = $this->_get_verifikasi_color($subak->verifikasi);
            $sheet->getStyle('G' . $row)->applyFromArray([
                'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => $color]]
            ]);
            
            $row++;
        }

        // Auto size columns
        foreach (range('A', 'J') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Borders
        $sheet->getStyle('A1:J' . ($row - 1))->applyFromArray([
            'borders' => [
                'allBorders' => ['borderStyle' => Border::BORDER_THIN, 'color' => ['rgb' => '000000']]
            ]
        ]);

        $filename = 'Daftar_Subak_' . date('Ymd_His') . '.xlsx';
        $this->_output_excel($spreadsheet, $filename);
    }

    /**
     * Export by verification status
     */
    public function export_by_status($status) {
        $subaks = $this->SubakModel->get_subak_by_status($status);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Subak ' . $status);

        // Similar to export_all but filtered
        // ... (implement similar to export_all)

        $filename = 'Subak_' . str_replace(' ', '_', $status) . '_' . date('Ymd') . '.xlsx';
        $this->_output_excel($spreadsheet, $filename);
    }

    // ========================================================================
    // PRIVATE HELPER METHODS
    // ========================================================================

    private function _get_complete_data($id_subak) {
        return [
            'subak' => $this->SubakModel->get_subak_by_id($id_subak),
            'alamat' => $this->SubakModel->get_alamat_by_id($id_subak),
            'prajuru' => $this->SubakModel->get_prajuru_by_id($id_subak),
            'perahyangan' => $this->SubakModel->get_perahyangan_by_id($id_subak),
            'pawongan' => $this->SubakModel->get_pawongan_by_id($id_subak),
            'pawongannamapenyakap' => $this->SubakModel->get_pawongan_nama_penyakap_by_id($id_subak),
            'palemahan' => $this->SubakModel->get_palemahan_by_id($id_subak),
            'palemahantanamanpokok' => $this->SubakModel->get_palemahan_tanaman_pokok_by_id($id_subak),
            'palemahanhama' => $this->SubakModel->get_palemahan_hama_by_id($id_subak),
            'palemahanbantuan' => $this->SubakModel->get_palemahan_bantuan_pemerintah_by_id($id_subak),
        ];
    }

    private function _create_info_sheet($spreadsheet, $data) {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Informasi Umum');

        // Title
        $sheet->setCellValue('A1', 'DETAIL SUBAK');
        $sheet->mergeCells('A1:B1');
        $sheet->getStyle('A1')->applyFromArray([
            'font' => ['bold' => true, 'size' => 16],
            'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
        ]);

        // Data
        $row = 3;
        $info = [
            ['ID Subak', $data['subak']->id_subak],
            ['Nama Subak', $data['subak']->nama_subak],
            ['Kriteria Subak', $data['subak']->kriteria_subak],
            ['Nomor Akte Notaris', $data['subak']->nomor_akte_notaris ?: '-'],
            ['NPWP', $data['subak']->npwp ?: '-'],
            ['Status Verifikasi', $data['subak']->verifikasi],
        ];

        foreach ($info as $item) {
            $sheet->setCellValue('A' . $row, $item[0]);
            $sheet->setCellValue('B' . $row, $item[1]);
            $sheet->getStyle('A' . $row)->getFont()->setBold(true);
            $row++;
        }

        // Column width
        $sheet->getColumnDimension('A')->setWidth(25);
        $sheet->getColumnDimension('B')->setWidth(50);
    }

    private function _create_alamat_prajuru_sheet($spreadsheet, $data) {
        $sheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Alamat & Prajuru');
        $spreadsheet->addSheet($sheet);

        // Alamat section
        $sheet->setCellValue('A1', 'ALAMAT SUBAK');
        $sheet->mergeCells('A1:B1');
        $sheet->getStyle('A1')->getFont()->setBold(true);

        $row = 2;
        $alamat = [
            ['Banjar/Lingkungan', $data['alamat']->br_lingkungan_subak],
            ['Desa', $data['alamat']->desa_subak],
            ['Kecamatan', $data['alamat']->kecamatan_subak],
            ['Kabupaten', $data['alamat']->kabupaten_subak],
            ['Kode Pos', $data['alamat']->kode_pos ?: '-'],
        ];

        foreach ($alamat as $item) {
            $sheet->setCellValue('A' . $row, $item[0]);
            $sheet->setCellValue('B' . $row, $item[1]);
            $row++;
        }

        // Prajuru section
        $row += 2;
        $sheet->setCellValue('A' . $row, 'DATA PRAJURU');
        $sheet->mergeCells('A' . $row . ':B' . $row);
        $sheet->getStyle('A' . $row)->getFont()->setBold(true);
        $row++;

        $prajuru = [
            ['Masa Bhakti', $data['prajuru']->masa_bhakti_ayahan_start . ' s/d ' . $data['prajuru']->masa_bhakti_ayahan_end],
            ['', ''],
            ['PEKASEH', ''],
            ['Nama', $data['prajuru']->pekaseh_nama ?: '-'],
            ['NPWP', $data['prajuru']->pekaseh_npwp ?: '-'],
            ['HP/WA', $data['prajuru']->pekaseh_hp_wa ?: '-'],
            ['', ''],
            ['PETAJUH', ''],
            ['Nama', $data['prajuru']->petajuh_nama ?: '-'],
            ['NPWP', $data['prajuru']->petajuh_npwp ?: '-'],
            ['HP/WA', $data['prajuru']->petajuh_hp_wa ?: '-'],
            ['', ''],
            ['PENYARIKAN', ''],
            ['Nama', $data['prajuru']->penyarikan_nama ?: '-'],
            ['NPWP', $data['prajuru']->penyarikan_npwp ?: '-'],
            ['HP/WA', $data['prajuru']->penyarikan_hp_wa ?: '-'],
        ];

        foreach ($prajuru as $item) {
            $sheet->setCellValue('A' . $row, $item[0]);
            $sheet->setCellValue('B' . $row, $item[1]);
            if (in_array($item[0], ['PEKASEH', 'PETAJUH', 'PENYARIKAN'])) {
                $sheet->getStyle('A' . $row)->getFont()->setBold(true);
            }
            $row++;
        }

        $sheet->getColumnDimension('A')->setWidth(25);
        $sheet->getColumnDimension('B')->setWidth(50);
    }

    private function _create_pawongan_sheet($spreadsheet, $data) {
        $sheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Pawongan');
        $spreadsheet->addSheet($sheet);

        // Similar implementation...
    }

    private function _create_palemahan_sheet($spreadsheet, $data) {
        $sheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Palemahan');
        $spreadsheet->addSheet($sheet);

        // Similar implementation...
    }

    private function _create_relasi_sheet($spreadsheet, $data) {
        $sheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Data Pendukung');
        $spreadsheet->addSheet($sheet);

        // Penyakap table
        // Tanaman Pokok table
        // Hama table
        // Bantuan table
    }

    private function _sanitize_filename($filename) {
        return preg_replace('/[^A-Za-z0-9_\-]/', '_', $filename);
    }

    private function _get_verifikasi_color($status) {
        $colors = [
            'Terverifikasi' => '00FF00',      // Green
            'Belum Terverifikasi' => 'FFFF00', // Yellow
            'Data Ditolak' => 'FF0000'         // Red
        ];
        return $colors[$status] ?? 'FFFFFF';
    }

    private function _output_excel($spreadsheet, $filename) {
        // Set headers
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Write file
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
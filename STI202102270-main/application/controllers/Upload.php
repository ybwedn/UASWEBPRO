<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    public function index()
    {
        // Load Form Helper
        $this->load->helper('form');
        // Load view for upload page
        $this->load->view('upload_form');
    }

    public function do_upload()
    {
        // Konfigurasi upload
        $config['upload_path'] = '../uploads/'; // Folder tempat menyimpan file
        $config['allowed_types'] = 'gif|jpg|png'; // Jenis file yang diperbolehkan
        $config['max_size'] = 100; // Ukuran maksimum file (dalam kilobit)

        // Memuat library upload dan mengatur konfigurasi
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            // Jika upload gagal, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            // Jika upload berhasil, ambil informasi file dan tampilkan hasilnya
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }
    }
}

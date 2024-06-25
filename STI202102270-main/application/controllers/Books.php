<?php
class Books extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->library('session');
        $this->load->helper('url'); // Tambahkan ini


    }

    public function index()
    {
        $data['tb_perpus'] = $this->Book_model->get_all_books();
        $this->load->view('book_list', $data);
    }

    public function create()
    {
        $this->load->view('book_form');
    }

    public function store()
    {
        $data = array(
            'kode_buku' => $this->input->post('kode_buku'),
            'isbn' => $this->input->post('isbn'),
            'judul_buku' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'sekilas_isi' => $this->input->post('sekilas_isi'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'stok' => $this->input->post('stok'),
            'foto' => $this->input->post('foto')
        );

        $this->Book_model->insert_book($data);
        redirect('books');
    }

    public function edit($id)
    {
        $data['tb_perpus'] = $this->Book_model->get_book($id);
        $this->load->view('book_edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'kode_buku' => $this->input->post('kode_buku'),
            'isbn' => $this->input->post('isbn'),
            'judul_buku' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang'),
            'sekilas_isi' => $this->input->post('sekilas_isi'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'stok' => $this->input->post('stok'),
            'foto' => $this->input->post('foto')
        );

        $this->Book_model->update_book($id, $data);
        redirect('books');
    }

    public function delete($id)
    {
        $this->Book_model->delete_book($id);
        redirect('books');
    }
}

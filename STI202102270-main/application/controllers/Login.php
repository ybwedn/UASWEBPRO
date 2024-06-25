<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model'); // Memuat model User_model
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('login_view');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            $this->session->set_userdata('logged_in', true);
            redirect('books');
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect('login');
    }
}

<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password); // Perlu diperbarui dengan hashing yang lebih aman
        $query = $this->db->get('tb_user');
        return $query->row_array();
    }
}

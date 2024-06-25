<?php
class Book_model extends CI_Model
{
    public $failover; // Tambahkan ini

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_books()
    {
        $query = $this->db->get('tb_perpus');
        return $query->result_array();
    }

    public function get_books()
    {
        $query = $this->db->get('tb_perpus');
        return $query->result_array();
    }

    public function insert_book($data)
    {
        return $this->db->insert('tb_perpus', $data);
    }

    public function get_book($id)
    {
        $query = $this->db->get_where('tb_perpus', array('id' => $id));
        return $query->row_array();
    }

    public function update_book($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_perpus', $data);
    }

    public function delete_book($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_perpus');
    }
}

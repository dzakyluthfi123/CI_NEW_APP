<?php

class Mahasiswa_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Pastikan database di-load
    }

    public function getALLMahasiswa()
    {
        $query = $this->db->get('mahasiswa'); // Menggunakan properti $db yang sudah di-load
        return $query->result();
    }
}

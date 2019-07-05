<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDmodel extends CI_Model {

    public function __construct() 
    {
        $this->load->database();
    }

    function createData(){
        $data = array (
            'jenis_task' => $this->input->post('jenis_task'),
            'pilih_site' => $this->input->post('pilih_site'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'nama_project' => $this->input->post('nama_project'),
            'operator' => $this->input->post('operator'),
            'keterangan' => $this->input->post('keterangan')
        )
        .$this->db->insert('tbl_perintah', $data);
    }

    function getAllData()
    {
        $query = $this->db->query('SELECT*FROM tbl_perintah');
        return $query->result();
    }
}

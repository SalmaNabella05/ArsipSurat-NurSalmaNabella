<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_pengguna extends CI_Model
{

    function all()
    {
        $data = $this->db->query("SELECT * FROM surat ORDER BY id_surat DESC");
        return $data->result();
    }

    public function getSuratById($id)
    {
        $query = $this->db->get_where('surat', array('id_surat' => $id));
        return $query->row_array();
    }

    function proses_tambah_surat()
    {
        $this->id_surat = uniqid();
        $data = [
            "no_surat" => $this->input->post('no_surat', true),
            "kategori" => $this->input->post('kategori', true),
            "judul" => $this->input->post('judul', true),
            "file" => $this->uploadfile()
        ];
        $this->db->insert('surat', $data);
    }

    public function uploadfile()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'pdf';
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
    }

    public function proses_hapus_surat($id)
    {
        return $this->db->delete('surat', array("id_surat" => $id));
    }
}

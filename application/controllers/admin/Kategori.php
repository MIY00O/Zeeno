<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }

    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'      =>  $kategori
        );
        $this->template->load('temp_admin', 'admin/kategori_index', $data);
    }

    public function simpan()
    {
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger" role="alert">
            Kategori Konten Sudah Digunakan.
            </div>'
            );
            redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori'     => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori', $data);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success" role="alert">
            Kategori Berhasil Disimpan
        </div>'
        );
        redirect('admin/kategori');
    }

    public function hapus($id)
    {
        $where = array(
            'id_kategori'   => $id
        );
        $this->db->delete('kategori', $where);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success" role="alert">
            Berhasil Menghapus Kategori
        </div>'
        );
        redirect('admin/kategori'); 
    }

    public function edit(){
        $where = array('id_kategori'   => $this->input->post('id_kategori'));
        $data = array('nama_kategori'  => $this->input->post('nama_kategori'));
        $this->db->update('kategori', $data, $where);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success" role="alert">
            Berhasil Mengedit Kategori
        </div>'
        );
        redirect('admin/kategori');
    }
}

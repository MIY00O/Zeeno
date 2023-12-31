<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')<>'Admin'){
            redirect('auth');
        }
    }

    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          =>  $user
        );
        $this->template->load('temp_admin', 'admin/user_index', $data);
    }

    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger" role="alert">
            Username Sudah Ada
            </div>'
            );
            redirect('admin/user');
        }
        $this->User_model->simpan();
        $this->db->insert('user');
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success" role="alert">
            Berhasil Disimpan
        </div>'
        );
        redirect('admin/user');
    }

    public function hapus($id)
    {
        $where = array(
            'id_user'   => $id
        );
        $this->db->delete('user', $where);
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success" role="alert">
            Berhasil Menghapus Data
        </div>'
        );
        redirect('admin/user'); 
    }

    public function edit(){
        $this->User_model->edit();
        $this->session->set_flashdata(
            'alert',
            '<div class="alert alert-success" role="alert">
            Berhasil Mengedit Data
        </div>'
        );
        redirect('admin/user');
    }
}

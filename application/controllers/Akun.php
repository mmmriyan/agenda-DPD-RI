<?php
defined ('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_akun','unitkerja');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['header'] = 'Kelola Akun';
        $data['unitkerja'] = $this->unitkerja->get();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/akun/index.php');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_unit', 'nama unit', 'trim|required');

        if($this->form_validation->run() == false){
            redirect('akun');
        }else{
            $data = [
                'nama_unit' => htmlspecialchars($this->input->post('nama_unit'), true),
                'email' => htmlspecialchars($this->input->post('email'), true)
            ];

            $this->unitkerja->insert($data);
            $this->session->set_Flashdata('pesan', 'unit kerja berhasil ditambahkan');
            redirect('akun');
        }
    }

    public function ubah()
    {
        $id = $this->uri->segment(3);
        if(!$id){
            redirect('akun');
        }else{
            $data['header'] = 'ubah unit kerja';
            $data['unitkerja'] = $this->unitkerja->get_where($id);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/akun/ubah_unit.php', $data);
            $this->load->view('templates/footer');
        }
    }

    public function simpan_ubah()
    {
        $id = htmlspecialchars($this->input->post('id_unit'), true);
        $data = [
            'nama_unit' => htmlspecialchars($this->input->post('nama_unit'), true),
            'email' => htmlspecialchars($this->input->post('email'), true)
        ];
        $this->unitkerja->update($id, $data);
        $this->session->set_flashdata('pesan', 'unit kerja berhasil diubah');
        redirect('akun');
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        if(!$id){
            redirect('akun');
        }else{
            $this->unitkerja->delete($id);
            $this->session->set_flashdata('pesan', 'unit kerja berhasil dihapus');
            redirect('akun');
        }
    }
}
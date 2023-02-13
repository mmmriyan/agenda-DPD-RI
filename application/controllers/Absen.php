<?php
defined ('BASEPATH') or exit ('No direct script acces allowed');

class Absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Absen', 'absen');
        $this->load->model('M_Dashboard', 'dashboard');
        $this->load->model('M_akun', 'unitkerja');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['header'] = '';
        $data['dashboard'] = $this->dashboard->get();
        $data['unitkerja'] = $this->unitkerja->get();
        $this->load->view('front/absen/index.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_peserta', 'Nama peserta', 'trim|required');
        $this->form_validation->set_rules('email', 'Alamat email', 'trim|required');
        $this->form_validation->set_rules('id_unit', 'Unit kerja', 'trim|required');
        $this->form_validation->set_rules('id_acara', 'Acara', 'trim|required');
        

        if($this->form_validation->run() == false){
            redirect('absen');
        }else{
            $data = [
                'nama_peserta' => htmlspecialchars($this->input->post('nama_peserta'), true),
                'email' => htmlspecialchars($this->input->post('email'), true),
                'id_unit' => htmlspecialchars($this->input->post('id_unit'), true),
                'id_acara' => htmlspecialchars($this->input->post('id_acara'), true)
            ];
            $this->absen->insert($data);
            $this->session->set_flashdata('pesan', 'absen berhasil ditambahkan');
            redirect('absen');
        }
    }

}
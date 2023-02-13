<?php
defined ('BASEPATH') or exit ('No direct script acces allowed');

class Dashboard extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Dashboard', 'dashboard');
        $this->load->model('M_akun', 'unitkerja');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data['dashboard'] = $this->dashboard->acara()->result();

        $data['header'] = '';
        $data['dashboard'] = $this->dashboard->get();
        $data['unitkerja'] = $this->unitkerja->get();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dashboard/index.php', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_acara', 'Nama acara', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('id_unit', 'Unit kerja', 'trim|required');
        
        if($this->form_validation->run() == false){
            redirect('dashboard');
        }else{
            $data = [
                'nama_acara' => htmlspecialchars($this->input->post('nama_acara'), true),
                'tanggal' => htmlspecialchars($this->input->post('tanggal'), true),
                'id_unit' => htmlspecialchars($this->input->post('id_unit'), true)
            ];
            // $this->db->insert('tb_acara', $data);
            // redirect('data', 'refresh');
            $this->dashboard->insert($data);
            $this->session->set_flashdata('pesan','acara berhasil ditambahkan');
            redirect('dashboard');
        }
    }

    public function ubah()
    {
        $id = $this->uri->segment(3);
        if(!$id){
            redirect('dashboard');
        }else{
            $data['header'] = 'edit acara';
            $data['dashboard'] = $this->dashboard->get_where($id);
            $data['unitkerja'] = $this->unitkerja->get();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/dashboard/ubah.php', $data);
            $this->load->view('templates/footer');
        }
    }

    public function simpan_ubah()
    {
        $id = htmlspecialchars($this->input->post('id_acara'), true);
        $data = [
            'nama_acara' => htmlspecialchars($this->input->post('nama_acara'), true),
            'tanggal' => htmlspecialchars($this->input->post('tanggal'), true),
            'id_unit' => htmlspecialchars($this->input->post('id_unit'), true)
        ];
        $this->dashboard->update($id, $data);
        $this->session->set_flashdata('pesan','acara berhasil diubah');
        redirect('dashboard');
    }

    public function hapus()
    {
        $id = $this->uri->segment(3);
        if(!$id){
            redirect('dashboard');
        }else{
            $this->dashboard->delete($id);
            $this->session->set_flashdata('pesan','acara berhasil dihapus');
            redirect('dashboard');
        }
    }
}
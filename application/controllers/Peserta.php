<?php
defined ('BASEPATH') or exit ('No direct script access allowed');

class Peserta extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_absen', 'absen');
        $this->load->model('M_dashboard', 'dashboard');
        $this->load->model('M_akun', 'unitkerja');
    }

    public function index()
    {
        $data['header'] = 'Daftar Peserta';
        $data['absen'] = $this->absen->get();
        $data['dashboard'] = $this->dashboard->get();
        $data['unitkerja'] = $this->unitkerja->get();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/peserta/index.php', $data);
        $this->load->view('templates/footer');
    }

    public function per_acara()
    {
        $data['header'] = 'Daftar Peserta';
        $data['absen'] = $this->absen->get();
        $data['dashboard'] = $this->dashboard->get();
        $data['unitkerja'] = $this->unitkerja->get();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/peserta/index.php', $data);
        $this->load->view('templates/footer');
    }

}
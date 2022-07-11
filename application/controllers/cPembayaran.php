<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPembayaran extends CI_Controller
{

    public function index()
    {
        $this->load->view('Layout/head');
        $this->load->view('Layout/navbar');
        $this->load->view('Layout/aside');
        $this->load->view('PembayaranSiswa/vpembayaran');
        $this->load->view('Layout/footer');
    }
}

/* End of file cPembayaran.php */

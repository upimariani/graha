<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDataPaket extends CI_Controller
{

    public function index()
    {
        $this->load->view('Layout/head');
        $this->load->view('Layout/navbar');
        $this->load->view('Layout/aside');
        $this->load->view('PaketPembayaran/vpaket');
        $this->load->view('Layout/footer');
    }
}

/* End of file cDataPaket.php */

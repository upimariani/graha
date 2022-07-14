<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPembayaran');
    }
    public function detail($nis)
    {
        $data = array(
            'detail' => $this->mPembayaran->data_pembayaran($nis)
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/navbar');
        $this->load->view('Layout/aside');
        $this->load->view('PembayaranSiswa/vtagihansiswa', $data);
        $this->load->view('Layout/footer');
    }
}

/* End of file cPembayaran.php */

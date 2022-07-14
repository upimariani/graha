<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDataPaket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPaket');
    }

    public function index()
    {
        $data = array(
            'paket' => $this->mPaket->select()
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/navbar');
        $this->load->view('Layout/aside');
        $this->load->view('PaketPembayaran/vpaket', $data);
        $this->load->view('Layout/footer');
    }
    public function addpaket()
    {
        $data = array(
            'name_paket' => $this->input->post('nama')
        );
        $this->mPaket->insert($data);
        $this->session->set_flashdata('success', 'Data Paket Pembelajaran Sudah Berhasil Disimpan!');
        redirect('cDataPaket');
    }
    public function update($id)
    {
        $data = array(
            'name_paket' => $this->input->post('nama')
        );
        $this->mPaket->update($id, $data);
        $this->session->set_flashdata('success', 'Data Paket Pembelajaran Sudah Berhasil Diperbaharui!');
        redirect('cDataPaket');
    }
    public function delete($id)
    {
        $this->mPaket->delete($id);
        $this->session->set_flashdata('success', 'Data Paket Pembelajaran Sudah Berhasil Dihapus!');
        redirect('cDataPaket');
    }


    //data detail paket
    public function detailpaket($id)
    {
        $data = array(
            'data' => $this->mPaket->detailpaket($id)
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/navbar');
        $this->load->view('Layout/aside');
        $this->load->view('PaketPembayaran/vdetailpaket', $data);
        $this->load->view('Layout/footer');
    }
    public function adddetailpaket($id)
    {
        $data = array(
            'id_paket' => $id,
            'jenis_pembayaran' => $this->input->post('item'),
            'price' => $this->input->post('harga')
        );
        $this->mPaket->insertdetail($data);
        $this->session->set_flashdata('success', 'Data Detail Kelas Berhasil Ditambahkan!');
        redirect('cDataPaket/detailpaket/' . $data['id_paket']);
    }
    public function updatedetailpaket($id_detail, $id_paket)
    {
        $data = array(
            'jenis_pembayaran' => $this->input->post('item'),
            'price' => $this->input->post('harga')
        );
        $this->mPaket->updatedetailpaket($id_detail, $data);
        $this->session->set_flashdata('success', 'Data Detail Kelas Berhasil Diperbaharui!');
        redirect('cDataPaket/detailpaket/' . $id_paket);
    }
}

/* End of file cDataPaket.php */

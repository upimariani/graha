<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDataSiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mSiswa');
    }

    public function index()
    {
        $data = array(
            'siswa' => $this->mSiswa->selectsiswa()
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/navbar');
        $this->load->view('Layout/aside');
        $this->load->view('Siswa/vsiswa', $data);
        $this->load->view('Layout/footer');
    }
    public function add_siswa()
    {
        $this->form_validation->set_rules('nis', 'Nomor Induk Siswa', 'required|is_unique[tbl_siswa.nis]');
        $this->form_validation->set_rules('nama', 'Nama Lengkap Siswa', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Lahir Siswa', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Siswa', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Siswa', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Layout/head');
            $this->load->view('Layout/navbar');
            $this->load->view('Layout/aside');
            $this->load->view('Siswa/vaddsiswa');
            $this->load->view('Layout/footer');
        } else {
            $data = array(
                'nis' => $this->input->post('nis'),
                'name' => $this->input->post('nama'),
                'gender' => $this->input->post('jk'),
                'address' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tgl')
            );
            $this->mSiswa->addsiswa($data);
            $this->session->set_flashdata('success', 'Data Siswa Berhasil Disimpan!');
            redirect('cDataSiswa');
        }
    }
    public function updatesiswa($id)
    {
        $this->form_validation->set_rules('nis', 'Nomor Induk Siswa', 'required');
        $this->form_validation->set_rules('nama', 'Nama Lengkap Siswa', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat Lahir Siswa', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal Lahir Siswa', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Siswa', 'required');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'siswa' => $this->mSiswa->edit($id)
            );
            $this->load->view('Layout/head');
            $this->load->view('Layout/navbar');
            $this->load->view('Layout/aside');
            $this->load->view('Siswa/vupdatesiswa', $data);
            $this->load->view('Layout/footer');
        } else {
            $data = array(
                'nis' => $this->input->post('nis'),
                'name' => $this->input->post('nama'),
                'gender' => $this->input->post('jk'),
                'address' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat'),
                'tanggal_lahir' => $this->input->post('tgl')
            );
            $this->mSiswa->update_siswa($id, $data);
            $this->session->set_flashdata('success', 'Data Siswa Berhasil Diperbaharui!');
            redirect('cDataSiswa');
        }
    }
    public function deletesiswa($id)
    {
        $this->mSiswa->delete($id);
        $this->session->set_flashdata('success', 'Data Siswa Berhasil Dihapus!');
        redirect('cDataSiswa');
    }
}

/* End of file cDataSiswa.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSiswa extends CI_Model
{
    public function addsiswa($data)
    {
        $this->db->insert('tbl_siswa', $data);
    }
    public function selectsiswa()
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        return $this->db->get()->result();
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->where('nis', $id);
        return $this->db->get()->row();
    }
    public function update_siswa($id, $data)
    {
        $this->db->where('nis', $id);
        $this->db->update('tbl_siswa', $data);
    }
    public function delete($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_siswa');
    }

    //mengambil data paket
    public function paket($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_detailpaket');
        $this->db->where('id_paket', $id);
        return $this->db->get()->result();
    }
    public function insert_pembayaran($data)
    {
        $this->db->insert('tbl_pembayaransiswa', $data);
    }
}

/* End of file mSiswa.php */

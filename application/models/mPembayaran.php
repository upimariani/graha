<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPembayaran extends CI_Model
{
    public function data_pembayaran($nis)
    {
        $data['pembayaran'] = $this->db->query("SELECT * FROM `tbl_pembayaransiswa` JOIN tbl_detailpaket ON tbl_pembayaransiswa.id_detailpaket = tbl_detailpaket.id_detailpaket WHERE nis='" . $nis . "'")->result();
        $data['siswa'] = $this->db->query("SELECT * FROM `tbl_siswa` WHERE nis='" . $nis . "'")->row();
        $data['payment'] = $this->db->query("SELECT * FROM `tbl_detailpayment` JOIN tbl_pembayaransiswa ON tbl_detailpayment.id_pembayaran=tbl_pembayaransiswa.id_pembayaran WHERE nis='" . $nis . "'")->result();
        return $data;
    }
}

/* End of file mPembayaran.php */

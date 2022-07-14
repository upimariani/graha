<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPaket extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('tbl_paket', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('tbl_paket');
        return $this->db->get()->result();
    }
    public function update($id, $data)
    {
        $this->db->where('id_paket', $id);
        $this->db->update('tbl_paket', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_paket', $id);
        $this->db->delete('tbl_paket');
    }

    //data detail paket
    public function detailpaket($id)
    {
        $data['detail'] = $this->db->query("SELECT * FROM `tbl_detailpaket` WHERE id_paket='" . $id . "'")->result();
        $data['paket'] = $this->db->query("SELECT * FROM tbl_paket WHERE id_paket='" . $id . "'")->row();
        return $data;
    }
    public function insertdetail($data)
    {
        $this->db->insert('tbl_detailpaket', $data);
    }
    public function updatedetailpaket($id, $data)
    {
        $this->db->where('id_detailpaket', $id);
        $this->db->update('tbl_detailpaket', $data);
    }
}

/* End of file mPaket.php */

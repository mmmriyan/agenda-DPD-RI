<?php
defined ('BASEPATH') or exit ('No direct script access allowed');

class M_peserta extends CI_Model{
    
    public function get()
    {
        return $this->db->get('tb_peserta')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('tb_peserta', $data);
    }

    public function get_where($id)
    {
        return $this->db->get_where('tb_peserta', ['id_peserta' => $id])->row_array();
    }

    public function delete($id)
    {
        return $this->db->delete('tb_peserta', ['id_peserta' => $id]);
    }

    public function update($id, $data)
    {
        return $this->db->update('tb_peserta', $data, ['id_peserta' => $id]);
    }
}
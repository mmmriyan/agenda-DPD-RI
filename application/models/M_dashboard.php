<?php
defined ('BASEPATH') or exit ('No direct script access allowed');

class M_dashboard extends CI_Model{

    public function get()
    {
        return $this->db->get('tb_acara')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('tb_acara', $data);
    }

    public function get_where($id)
    {
        return $this->db->get_where('tb_acara', ['id_acara' => $id])->row_array();
    }

    public function delete($id)
    {
        return $this->db->delete('tb_acara', ['id_acara' => $id]);
    }

    public function update($id, $data)
    {
        return $this->db->update('tb_acara', $data, ['id_acara' => $id]);
    }
}
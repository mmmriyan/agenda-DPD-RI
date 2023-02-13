<?php
defined ('BASEPATH') or exit ('No direct script access allowed');

class M_akun extends CI_Model{

    // public function acara()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_unitkerja');
    //     $this->db->join('tb_acara', 'tb_acara.id_unit = tb_unitkerja.id_unit');
    //     return $this->db->get('');

    // }

    public function get()
    {
        return $this->db->get('tb_unitkerja')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('tb_unitkerja', $data);
    }

    public function get_where($id)
    {
        return $this->db->get_where('tb_unitkerja', ['id_unit' => $id])->row_array();
    }

    public function delete($id)
    {
        return $this->db->delete('tb_unitkerja', ['id_unit' => $id]);
    }

    public function update($id, $data)
    {
        return $this->db->update('tb_unitkerja', $data, ['id_unit' => $id]);
    }

}
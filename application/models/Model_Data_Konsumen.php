<?php
class Model_Data_Konsumen extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('konsumen')->result_array();
    }

    public function tambahData()
    {
        $data = array(
            'nama_konsumen' => $this->input->post('nama_konsumen', true),
            'username' => $this->input->post('username', true),
            'password' => md5($this->input->post('password', true))
        );
        return $this->db->insert('konsumen', $data);
    }

    public function hapusData($id)
    {
        return $this->db->delete('konsumen', ['id' => $id]);
    }

    public function pilihData($id){
        return $this->db->get_where('konsumen', array('id' => $id))->row_array();
    }

    public function editData()
    {
        $nama_konsumen = $this->input->post('nama_konsumen', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $data = array(
            'nama_konsumen' => $nama_konsumen,
            'username' => $username,
            'password' => $password,
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('konsumen', $data);
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_konsumen', $keyword);
        $this->db->or_like('username', $keyword);
        return $this->db->get('konsumen')->result_array();
    }
}

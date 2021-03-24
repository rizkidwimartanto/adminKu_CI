<?php
class Model_Data_Peruqyah extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('peruqyah')->result_array();
    }

    public function tambahData()
    {
        $photo = $_FILES['photo'];
        if ($photo = '') {
            echo "<script>alert('Upload Gagal')</script>";
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                echo "<script>alert('Upload Gagal')</script>";
                die();
            } else {
                $photo = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'no_hp' => $this->input->post('no_hp', true),
            'photo' => $photo,
        );
        return $this->db->insert('peruqyah', $data);
    }

    public function hapusData($id)
    {
        return $this->db->delete('peruqyah', ['id' => $id]);
    }

    public function editData()
    {
        $photoedit = $_FILES['photo'];
        if ($photoedit = '') {
            echo "<script>alert('Upload Gagal')</script>";
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                echo "<script>alert('Upload Gagal')</script>";
                die();
            } else {
                $photoedit = $this->upload->data('file_name');
            }
        }

        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $no_hp = $this->input->post('no_hp', true);
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'photo' => $photoedit,
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('peruqyah', $data);
    }

    public function pilihData($id){
        return $this->db->get_where('peruqyah', array('id' => $id))->row_array();
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('no_hp', $keyword);
        return $this->db->get('peruqyah')->result_array();
    }
}

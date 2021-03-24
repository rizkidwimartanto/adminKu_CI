<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakonsumenruqyah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_Data_Konsumen');
    }

    public function index()
    {
        $data['judul'] = "Data Konsumen";
        $data['datakonsumen'] = $this->Model_Data_Konsumen->tampilData();
        if($this->input->post('keyword')){
            $data['datakonsumen'] = $this->Model_Data_Konsumen->cariData();
        }
        $this->load->view('dashboard/headerfooter/header.php', $data);
        $this->load->view('dashboard/Ruqyah/datakonsumen.php', $data);
        $this->load->view('dashboard/headerfooter/footer.php');
    }

    public function tambah()
    {
        $query = $this->Model_Data_Konsumen->tambahData();
        if ($query) {
            $this->session->set_flashdata('flashtambah', 'Berhasil Ditambahkan!');
            redirect('datakonsumenruqyah');
        } else {
            $this->session->set_flashdata('flashtambah', 'Gagal Ditambahkan!');
            redirect('datakonsumenruqyah');
        }
    }

    public function hapus($id)
    {
        $query = $this->Model_Data_Konsumen->hapusData($id);
        if ($query) {
            $this->session->set_flashdata('flashhapus', 'Berhasil Dihapus!');
            redirect('datakonsumenruqyah');
        } else {
            $this->session->set_flashdata('flashhapus', 'Gagal Dihapus!');
            redirect('datakonsumenruqyah');
        }
    }

    public function id($id)
    {
        $data['judul'] = "Form Update";
        $data['id_konsumen'] = $id;
        $data['datakonsumen'] = $this->Model_Data_Konsumen->pilihData($id);
        $this->load->view('dashboard/headerfooter/header.php', $data);
        $this->load->view('dashboard/Ruqyah/formupdatekonsumen.php', $data);
        $this->load->view('dashboard/headerfooter/footer.php');
    }

    public function edit($id)
    {
        $data['judul'] = "Form Update";
        $data['id_konsumen'] = $id;
        $data['datakonsumen'] = $this->Model_Data_Konsumen->pilihData($id);
        $this->form_validation->set_rules('nama_konsumen', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // $this->form_validation->set_rules('confirmpassword', 'Konfirmasi Password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashboard/headerfooter/header.php', $data);
            $this->load->view('dashboard/Ruqyah/formupdatekonsumen.php', $data);
            $this->load->view('dashboard/headerfooter/footer.php');
        } else {
            $this->Model_Data_Konsumen->editData();
            $this->session->set_flashdata('flashupdate', 'Berhasil Diupdate!');
            redirect('datakonsumenruqyah');
        }
    }
}

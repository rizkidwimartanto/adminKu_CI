<?php
class Dataperuqyah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Data_Peruqyah');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Data peruqyah";
        $data['dataperuqyah'] = $this->Model_Data_Peruqyah->tampilData();
        if ($this->input->post('keyword')) {
            $data['dataperuqyah'] = $this->Model_Data_Peruqyah->cariData();
        }
        $this->load->view('dashboard/headerfooter/header.php', $data);
        $this->load->view('dashboard/Ruqyah/dataperuqyah.php', $data);
        $this->load->view('dashboard/headerfooter/footer.php');
    }

    public function tambah()
    {
        $query = $this->Model_Data_Peruqyah->tambahData();
        if ($query) {
            $this->session->set_flashdata('flashtambah', 'Berhasil Ditambahkan!');
            redirect('dataperuqyah');
        } else {
            $this->session->set_flashdata('flashtambah', 'Gagal Ditambahkan!');
            redirect('dataperuqyah');
        }
    }

    public function hapus($id)
    {
        $query = $this->Model_Data_Peruqyah->hapusData($id);
        if ($query) {
            $this->session->set_flashdata('flashhapus', 'Berhasil Dihapus!');
            redirect('dataperuqyah');
        } else {
            $this->session->set_flashdata('flashhapus', 'Gagal Dihapus!');
            redirect('dataperuqyah');
        }
    }

    public function id($id)
    {
        $data['judul'] = "Form Update";
        $data['id_peruqyah'] = $id;
        $data['dataperuqyah'] = $this->Model_Data_Peruqyah->pilihData($id);
        $this->load->view('dashboard/headerfooter/header.php', $data);
        $this->load->view('dashboard/Ruqyah/formupdateperuqyah.php', $data);
        $this->load->view('dashboard/headerfooter/footer.php');
    }

    public function edit($id)
    {
        $data['judul'] = "Form Update";
        $data['id_peruqyah'] = $id;
        $data['dataperuqyah'] = $this->Model_Data_Peruqyah->pilihData($id);
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashboard/headerfooter/header.php', $data);
            $this->load->view('dashboard/Ruqyah/formupdateperuqyah.php', $data);
            $this->load->view('dashboard/headerfooter/footer.php');
        } else {
            $this->Model_Data_Peruqyah->editData();
            $this->session->set_flashdata('flashupdate', 'Berhasil Diupdate!');
            redirect('dataperuqyah');
        }
    }
}

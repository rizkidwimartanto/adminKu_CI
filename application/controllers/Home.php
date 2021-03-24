<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller{
        public function index(){
            $data['judul'] = "Dashboard";
            $this->load->view('dashboard/headerfooter/header.php' ,$data);
            $this->load->view('dashboard/admin/admin.php');
            $this->load->view('dashboard/headerfooter/footer.php');
        }
    }
?>
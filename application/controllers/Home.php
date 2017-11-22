<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('skincare_model');
        $this->load->model('treatment_model');
    }

    public function index()
    {

		$this->load->view('home');
        
    } 
     public function homeAdmin(){
        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
        {
            redirect('/');
        }

        $this->load->view('home_admin');
    }
    public function loginAdmin(){
        $this->load->view('home_admin');
    }
    
    public function loginUser(){
        $this->load->view('home_member');
    }
     public function daftar(){
        $this->load->view('member/registrasi');
}
    public function about(){
        $this->load->view('about');
    }
    public function product(){
         $data['skincare'] = $this->skincare_model->ambil_data();
       
        $this->load->view('product', $data);
    }
    public function product_member(){
         $data['skincare'] = $this->skincare_model->ambil_data();
       
        $this->load->view('product_member', $data);
    }
    public function treatment(){
         $data['treatment'] = $this->treatment_model->ambil_data();

        $this->load->view('treatment', $data);
    }
     public function treatment_member(){
         $data['treatment'] = $this->treatment_model->ambil_data();
       
        $this->load->view('treatment_member', $data);
    }
    public function contact(){
        $this->load->view('contact');
    }
    public function login(){
        $this->load->view('login');
    }
    public function setting(){
        $this->load->view('setting');
    }
}
?>

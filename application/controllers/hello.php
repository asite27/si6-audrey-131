<?php
defined('BASEPATH') OR exit('No Direct Script Access allowed');

class Hello extends CI_Controller{
    public function index(){
        $data['nama'] = 'Audrey Malika Putri br Sitepu';
        $data['nim'] = '201401131';
        $data['lab'] = 'Lab SI 6';
        $this->load->view('hello_world',$data);
    }
    
    public function lab5($nama){
        echo 'Lab 5 ';
    }
    
    public function lab6($nama){
        echo 'Lab 6 '.$nama;
    }
}

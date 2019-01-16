<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  //jika yang login adalah HRD
  function index(){
    //Allowing akses to HRD only
      if($this->session->userdata('level')==='1'){
          $this->load->view('hrd/header');
          $this->load->view('hrd/content');
          $this->load->view('hrd/footer');
      }else{
          echo "Access Denied";
      }

  }

  function manajer(){
    //Allowing akses to Manajer only
    if($this->session->userdata('level')==='2'){
      $this->load->view('manajer/dashboard_view');
    }else{
        echo "Access Denied";
    }
  }

  function admin(){
    //Allowing akses to Admin only
    if($this->session->userdata('level')==='3'){
      $this->load->view('admin/dashboard_view');
    }else{
        echo "Access Denied";
    }
  }

}

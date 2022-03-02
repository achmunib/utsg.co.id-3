<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Message_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  public function index()
  {
    $data['title'] = 'Beranda';
    $this->load->view('template/topbar');
    $this->load->view('template/header');
    $this->load->view('user/index', $data);
    $this->load->view('template/footer');
  }

  // Cals project
  public function portfolio_mining()
  {
    $data['title'] = 'Portfolio Mining';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('portfolio/portfolio_mining', $data);
    $this->load->view('template/footer');
  }

  public function portfolio_construction()
  {
    $data['title'] = 'Portfolio Construction';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('portfolio/portfolio_construction', $data);
    $this->load->view('template/footer');
  }

  // End Project

  public function message()
  {
    $data['title'] = 'Message';
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required|trim');
    $this->form_validation->set_rules('subject', 'Subject', 'required|trim');
    $this->form_validation->set_rules('message', 'Message', 'required|trim');

    if ($this->form_validation->run() == false) { 
      $this->session->set_flashdata('flash', 'Maaf Data Tidak Lengkap, Silahkan Ulangi Kembali');
      redirect('user');
    } else {
      $this->Message_model->inputMassage();
      $this->session->set_flashdata('flash', 'Selamat, Data berhasil ditambahkan');
      redirect('user');
    }
  }

}
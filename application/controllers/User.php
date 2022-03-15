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
    $this->load->view('portfolio/footer');
  }

  public function portfolio_construction()
  {
    $data['title'] = 'Portfolio Construction';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('portfolio/portfolio_construction', $data);
    $this->load->view('portfolio/footer');
  }

  public function utsg_trees()
  {
    $data['title'] = 'UTSG TREES';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('program/trees', $data);
    $this->load->view('portfolio/footer');
  }

  public function utsg_future()
  {
    $data['title'] = 'UTSG FUTURE';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('program/future', $data);
    $this->load->view('portfolio/footer');
  }

  public function utsg_care()
  {
    $data['title'] = 'UTSG CARE';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('program/care', $data);
    $this->load->view('portfolio/footer');
  }

  public function utsg_action()
  {
    $data['title'] = 'UTSG ACTION';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('program/action', $data);
    $this->load->view('portfolio/footer');
  }

  public function utsg_growth()
  {
    $data['title'] = 'UTSG GROWTH';
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('program/growth', $data);
    $this->load->view('portfolio/footer');
  }

  public function news($id_news)
  {
    $data['title'] = 'NEWS';
    $data['halaman'] = $id_news;

    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    if ($id_news == 1) {
      $main_view = $this->load->view('news/pages/1', $data);
    }
    if ($id_news == 2) {
      $main_view = $this->load->view('news/pages/2', $data);
    }
    if ($id_news == 3) {
      $main_view = $this->load->view('news/pages/3', $data);
    }
    $primary_view;
    $this->load->view('portfolio/footer');
  }

  public function detail_news($id_detail_news)
  {
    $data['title'] = 'NEWS DETAIL';
    $data['detail'] = $id_detail_news;
    
    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    if ($id_detail_news == 1) {
      $main_view = $this->load->view('news/details/1', $data);
    }
    if ($id_detail_news == 2) {
      $main_view = $this->load->view('news/details/2', $data);
    }
    if ($id_detail_news == 3) {
      $main_view = $this->load->view('news/details/3', $data);
    } 
    if ($id_detail_news == 4) {
      $main_view = $this->load->view('news/details/4', $data);
    }
    $main_view;
    $this->load->view('portfolio/footer');
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
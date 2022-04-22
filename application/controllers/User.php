<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('News_model','news');
    $this->load->model('Message_model');
    $this->load->library('form_validation');
    $this->load->library('pagination');
    $this->load->helper('url');
  }

  public function index()
  {
    $data['title'] = 'Beranda';
    $data['news'] = $this->news->getNews();
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

  public function news()
  {
    $data['title'] = 'NEWS';
    $data['all'] = $this->news->getPageNews();
    $total_rows = $data['all']['total_page'];
    
    //Config Pagination
    $config = [
      // 'base_url' => 'http://localhost/utsg.co.id-3/user/news',
      'base_url' => base_url('user/news'),
      'total_rows' => $total_rows,
      'per_page' => 4,
      'uri_segment' => 3,
      'first_link' => 'First',
      'last_link' => 'Last',
      'next_link' => 'Next',
      'prev_link' => 'Prev',
      'full_tag_open' => '<div class="row"><ul class="pagination justify-content-center">',
      'full_tag_close' => '</ul></div>',
      'num_tag_open' => '<li class="page-item"><span class="page-link">',
      'num_tag_close' => '</span></li>',
      'cur_tag_open' => '<li class="page-item active"><span class="page-link">',
      'cur_tag_close' => '<span class="sr-only"></span></span></li>',
      'next_tag_open' => '<li class="page-item"><span class="page-link">',
      'next_tagl_close' => '<span aria-hidden="true">&raquo;</span></span></li>',
      'prev_tag_open' => '<li class="page-item"><span class="page-link">',
      'prev_tagl_close' => '</span>Next</li>',
      'first_tag_open' => '<li class="page-item"><span class="page-link">',
      'first_tagl_close' => '</span></li>',
      'last_tag_open' => '<li class="page-item"><span class="page-link">',
      'last_tagl_close' => '</span></li>'
    ];
    
    $choice = $config['total_rows'] / $config['per_page'];
    $config['num_links'] = floor($choice);
    // echo '<pre>';
    // print_r($config['num_links']);
    // exit;
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['data'] = $this->news->getAllNews($config['per_page'], $page);

    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('news/pages/1', $data);
    $this->load->view('portfolio/footer');
  }

  public function detail_news($id)
  {
    $data['title'] = 'NEWS DETAIL';
    $data['detail'] = $this->news->getDetailNews($id);

    $this->load->view('template/topbar');
    $this->load->view('portfolio/header');
    $this->load->view('news/details/1', $data);
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
<?php


class Home extends CI_Controller {
    public function __construct()
    
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    public function index() 
    {
        $data['title']  = 'Home';
 

        $data['output'] = $this->Home_model->getCarousel();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }


}


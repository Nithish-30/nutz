<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

    public function index()
    {
        
        $this->load->model('Welcome_model');
        $data['message'] = $this->Welcome_model->getWelcomeMessage();
        $this->load->view('welcome_view', $data);
    }

}

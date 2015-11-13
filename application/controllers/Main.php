<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    public function index()
    {
        $this->load->view('main_view');
    }

    function login(){
        $this->load->model('login_model');
        $this->login_model->checklogin( $this->input->post('inp_username'), $this->input->post('inp_password') );
        $this->load->view('main_view');
    }

    function logout(){
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            $this->session->unset_userdata($key);
        }
        $this->load->view('main_view');
    }

    function thread(){
        echo $this->input->get('a');
    }

}

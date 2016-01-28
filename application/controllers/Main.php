<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->model('login_model');
        $this->load->model('insert_model');
        $this->load->model('get_model');
    }

    public function index()
    {
        $get_table['forum_table'] = $this->get_model->load_all_table();
        $data['content'] = $this->load->view('content_view', $get_table, TRUE);
        $data['navigator'] = $this->load->view('nav', NULL, TRUE);
        $this->load->view('main_view', $data);
    }

    function login(){
        $this->load->model('login_model');
        $this->login_model->checklogin( $this->input->post('inp_username'), $this->input->post('inp_password') );
        $data['navigator'] = $this->load->view('nav', NULL, TRUE);
        $this->load->view('main_view', $data);
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

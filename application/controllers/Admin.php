<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->library( 'session' );
        $this->load->model('login_model');
        $this->load->model('insert_model');
        $this->load->model('get_model');
    }

    function validatelogin(){
//        print_r($this->login_model->load_discussion());
//        return false;
        if($this->session->userdata('admin_id')){
            $data['discussion_data'] = $this->login_model->load_discussion();
            $data['new_threads'] = $this->login_model->load_new_threads();
            $data['loaded_contents'] = $this->login_model->load_contents();
            $data['navigator'] = $this->load->view('admin/nav', NULL, TRUE);
            $data['dashboard'] = $this->load->view('admin/dashboard', $data, TRUE);
            $this->load->view ('admin/admin_view', $data);
        }else{
            $data['dashboard'] = $this->load->view('admin/login', NULL, TRUE);
            $this->load->view('admin/admin_view', $data);
        }
    }

    public function index()
    {
        $this->validatelogin();
    }

    function login(){

        $this->login_model->adminlogin( $this->input->post('username'), $this->input->post('password') );
        $this->validatelogin();
    }

    function ajaxcontent(){
        echo json_encode( $this->get_model->model_load_contents($this->input->post('id')) );
        return false;
    }

    function logout(){
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            $this->session->unset_userdata($key);
        }

        $this->index();
    }

    function add_discussion(){

        if( $this->insert_model->add_model_discussion( $this->input->post('inp_discussion') ) == true ){
            echo 'Save';
        }else{
            echo 'Failed';
        }
    }

    function add_forum(){

        if( $this->insert_model->add_model_forum( $this->input->post('inp_forum'), $this->input->post('sel_forums_discussion') ) == true ){
            echo 'Save';
        }else{
            echo 'Failed';
        }
    }

    function add_threads(){
        if( $this->insert_model->add_threads_forum( $this->input->post('sel_threads_discussion'), $this->input->post('sel_threads_forum'), $this->input->post('sel_sticky'), $this->input->post('inp_thread') ) == true ){
            echo $this->db->insert_id();;
        }else{
            echo 'Failed';
        }
    }
}
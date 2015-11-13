<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class insert_model extends CI_Model {


    public function __construct() {
        parent::__construct ();
        $this->load->model('get_model');
    }

    function add_model_discussion($discussion_name){
        $data = array(
            'date_created'      => date("m-d-Y  H:i:s"),
            'admin_id'          => $this->session->userdata('admin_id'),
            'discussion_name'   => $discussion_name
        );

        $this->db->insert('forum-discussion', $data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function add_model_forum($inp_forum, $sel_forum_discussion){
        $data = array(
            'discussion_id'     => $sel_forum_discussion,
            'admin_id'          => $this->session->userdata('admin_id'),
            'content_title'     => $inp_forum,
            'last_post'         => '',
            'threads'           => '0',
            'posts'             => '0',
            'date_created'      => date("m-d-Y H:i:s")
        );

        $this->db->insert('forum-contents', $data);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function add_threads_forum($sel_threads_discussion,$sel_threads_forum,$sel_sticky,$inp_thread){
        $data = array(
            'content_id'        => $sel_threads_forum,
            'stud_id'           => 0,
            'admin_id'          => $this->session->userdata('admin_id'), //admin_name
            'sticky'            => $sel_sticky,
            'thread'            => $inp_thread,
            'last_post'         => date("m-d-Y  H:i:s").' by '.$this->session->userdata('admin_name'),
            'views'             => '1',
            'date_created'      => date("m-d-Y H:i:s")
        );

        $this->db->insert('forum-threads', $data);

        return ($this->db->affected_rows() != 1) ? false : $this->get_model->count_thread_replies( $this->db->insert_id() );
    }

}
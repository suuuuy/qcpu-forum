<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class get_model extends CI_Model {

    function model_load_contents($discussion_id){

        $query = $this->db->get_where( 'forum-contents', array( 'discussion_id' => $discussion_id ) );
        return $query->result_array();
    }

    function count_thread_replies($thread_id){
        $query = $this->db->get_where( 'forum-contents', array( 'discussion_id' => $thread_id ) );
        $result = $query->row_array();
        return $result['COUNT(*)'];
    }

}
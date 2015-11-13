<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
    function checklogin($uname, $password){
        $query = $this->db->get_where('stud_info', array('stud_no' => $uname, 'password' => md5($password)));
        if ($query->num_rows() > 0)
        {

            foreach ($query->result_array() as $user)
            {

                $this->session->set_userdata(array(
                    'stud_id'       => $user['stud_id'],
                    'stud_no'       => $user['stud_no'],
                    'lastname'      => $user['lastname'],
                    'firstname'     => $user['firstname'],
                    'middlename'    => $user['middlename'],
                    'status'        => TRUE
                ));

            }

            return 'registered';
        }else{
            return 'unregistered';
        }
    }

    function adminlogin($uname, $password){

        $query = $this->db->get_where('forum-admin', array('user' => $uname, 'pass' => md5($password)));
        if ($query->num_rows() > 0)
        {

            foreach ($query->result_array() as $admin)
            {

                $this->session->set_userdata(array(
                    'admin_id'      => $admin['admin_id'],
                    'user'          => $admin['user'],
                    'pass'          => $admin['pass'],
                    'admin_name'    => $admin['admin_name'],
                    'status'        => TRUE
                ));

            }

            return 'registered';
        }else{
            return 'unregistered';
        }

    }

    function load_discussion(){

        return $query = $this->db->get('forum-discussion');

    }

    function fetch_admin(){
        $query = $this->db->get_where('forum-admin', array('user' => $uname, 'pass' => md5($password)));
        if ($query->num_rows() > 0)
        {

            foreach ($query->result_array() as $admin)
            {

                $this->session->set_userdata(array(
                    'admin_id'      => $admin['admin_id'],
                    'user'          => $admin['user'],
                    'pass'          => $admin['pass'],
                    'admin_name'    => $admin['admin_name'],
                    'status'        => TRUE
                ));

            }

            return 'registered';
        }else{
            return 'unregistered';
        }
    }

    function load_new_threads(){
        return $this->db->get('forum-threads', 10, 0);
    }

    function load_contents(){
        return $this->db->get('forum-contents');
    }

    function fetch_(){

    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index(){

        $data['account'] = $this->db->get_where('account', ['Email' => $this->session->userdata('Email')])->row_array();
        $this->load->view('V_home',$data);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User{

    var $ci;

    function __construct()
    {
        $this->ci = & get_instance();
    }

    function Get_template($data){
        $this->ci->load->view('Templates/V_header');
        $this->ci->load->view('Templates/V_sidebar');
        $this->ci->load->view('Templates/V_component',$data);
    }

}
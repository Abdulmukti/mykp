<?php

Class Fungsi{

    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function admin_login(){
        $this->ci->load->model('admin_m');
        $admin_id = $this->ci->session->userdata('adminid');
        $admin_data = $this->ci->admin_m->get($admin_id)->row();
        return $admin_data;
    }
}
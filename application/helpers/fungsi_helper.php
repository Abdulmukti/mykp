<?php

function check_already_login()
{
    $ci =& get_instance();
    $admin_session = $ci->session->userdata('adminid');
    if($admin_session){
        redirect('dashboard');
        redirect('pegawai');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $admin_session = $ci->session->userdata('adminid');
    if(!$admin_session){
        redirect('auth/login');
    }
}
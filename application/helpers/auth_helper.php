<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('check_auth')) {
    function check_auth()
    {
        $CI =& get_instance();
        if (!$CI->session->userdata('logged_in')) {
            $CI->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
            redirect('Login_Control/index');
        }
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Login_User');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function cek_login_Editor()
	{
		$this->form_validation->set_rules('emailEditor', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('passwordEditor', 'Password', 'required|min_length[8]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Email harus valid dan password minimal 8 karakter.');
			redirect('Login_Control/index');
		} else {
			$email = $this->input->post("emailEditor");
			$password = $this->input->post("passwordEditor");
			$cek_login = $this->Login_User->login_Editor($email, $password);
			
			if (empty($cek_login)) {
				$this->session->set_flashdata('error', 'User Tidak Ditemukan');
				redirect('Login_Control/index');
			} else {
				$this->session->set_userdata('logged_in', TRUE);
				$this->session->set_flashdata('success', 'Login Berhasil');

				$user_data = $this->Login_User->get_user_data($email);
                if ($user_data) {
                    $this->session->set_userdata('user_name', $user_data->NAMA);
                }
				redirect('Editor/Editor_View_Dashboard');
			}
		}
	}

	public function cek_login_Staff()
	{
		$this->form_validation->set_rules('emailStaff', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('passwordStaff', 'Password', 'required|min_length[8]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Email harus valid dan password minimal 8 karakter.');
			redirect('Login_Control/index');
		} else {
			$email = $this->input->post("emailStaff");
			$password = $this->input->post("passwordStaff");
			$cek_login = $this->Login_User->login_Staff($email, $password);
			
			if (empty($cek_login)) {
				$this->session->set_flashdata('error', 'User Tidak Ditemukan');
				redirect('Login_Control/index');
			} else {
				
				$this->session->set_userdata('logged_in', TRUE);
				$this->session->set_flashdata('success', 'Login Berhasil');

				$user_data = $this->Login_User->get_user_data($email);
                if ($user_data) {
                    $this->session->set_userdata('user_name', $user_data->NAMA);
                }
				redirect('Staff/Staff_View_Dashboard');
			}
		}
	}
	public function logout()
{
    $this->session->unset_userdata('logged_in');
    redirect('Login_Control/index');
}
}
?>
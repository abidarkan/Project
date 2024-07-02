<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 /** Function Pemanggilan Halaman */
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('Penulis_Model');
		 $this->load->model('count_Pengajuan_Model');
		 $this->load->model('pengajuan_progress_model');
		 $this->load->model('Login_User');
	 }

	public function Editor_View_Dashboard(){
		$this->load->view('Editor_Dashboard');
	}

	public function Editor_Daftar_Kerja(){
		$this->load->view('Editor_Daftar_Kerja');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

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
		 $this->load->library('form_validation');
		 check_auth();
	 }

	public function Staff_View_Dashboard(){
		$data ['count_edited'] = $this->count_Pengajuan_Model->get_count_edited();
		$data ['count_completed'] = $this->count_Pengajuan_Model->get_count_completed();
		$data ['count_rejected'] = $this->count_Pengajuan_Model->get_count_rejected();
		$data ['count'] = $this->count_Pengajuan_Model->get_count_progress();
		$data['recent'] = $this->pengajuan_progress_model->get_limit_progress();
		$this->load->view('Staff_Dashboard',$data);
	}
	public function pengajuan(){
		$statusFilter = $this->input->get('statusFilter');
		$dataPengajuan['all_pengajuan'] = $this->pengajuan_progress_model->get_all_pengajuan($statusFilter);
		$this->load->view('layout/Navbar');
        $this->load->view('layout/ContentPengajuanStaff', $dataPengajuan);
        $this->load->view('layout/Footer');
	}

	public function manageeditor(){
		$data['penulis'] = $this->Penulis_Model->get_all_editor();
		$this->load->view('Staff_Manage_Editor', $data);
	}
	public function managepenulis(){
		$data['penulis'] = $this->Penulis_Model->get_all_penulis();
		$this->load->view('Staff_Manage_Penulis', $data);
	}
	public function del_pengajuan($id){
		$this->pengajuan_progress_model->delete_pengajuan($id);
		redirect('Staff/pengajuan');
	}
	public function update_pengajuan($id) {
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		// Add more form validation rules as needed
	
		if ($this->form_validation->run() == FALSE) {
			// Load your view with form validation errors
			$this->session->set_flashdata('error', validation_errors());
        	redirect('Staff/pengajuan');
		} else {
			// Get the form values
			$data = array(
				'judul' => $this->input->post('judul', TRUE),
				'nama_penulis' => $this->input->post('nama_penulis', TRUE),
				'edisi' => $this->input->post('edisi', TRUE),
				'seri' => $this->input->post('seri', TRUE),
				'tahun_terbit' => $this->input->post('tahun_terbit', TRUE),
				'jumlah_halaman' => $this->input->post('jumlah_halaman', TRUE),
				'tinggi_buku' => $this->input->post('tinggi_buku', TRUE),
				'kategori' => $this->input->post('kategori', TRUE),
				'jenis' => $this->input->post('jenis', TRUE),
				'media' => $this->input->post('media', TRUE),
				'keterangan' => $this->input->post('keterangan', TRUE)
			);
	
			// File upload settings
			$config['upload_path'] = APPPATH . '../Berkas/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc|docx';
			$config['max_size'] = 2048; // 2MB max size
	
			$this->load->library('upload', $config);
	
			// Handle file upload for file_buku
			if (!empty($_FILES['file']['name'])) {
				if ($this->upload->do_upload('file')) {
					$upload_data = $this->upload->data();
					$data['file_buku'] = $upload_data['file_name'];
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors());
                	redirect('Staff/pengajuan');
				}
			}
	
			// Handle file upload for lampiran_pendukung
			if (!empty($_FILES['lampiran']['name'][0])) {
				$files = $_FILES;
				$count = count($_FILES['lampiran']['name']);
				$lampiran = array();
	
				for ($i = 0; $i < $count; $i++) {
					$_FILES['lampiran']['name'] = $files['lampiran']['name'][$i];
					$_FILES['lampiran']['type'] = $files['lampiran']['type'][$i];
					$_FILES['lampiran']['tmp_name'] = $files['lampiran']['tmp_name'][$i];
					$_FILES['lampiran']['error'] = $files['lampiran']['error'][$i];
					$_FILES['lampiran']['size'] = $files['lampiran']['size'][$i];
	
					$this->upload->initialize($config);
	
					if ($this->upload->do_upload('lampiran')) {
						$upload_data = $this->upload->data();
						$lampiran[] = $upload_data['file_name'];
					} else {
						$this->session->set_flashdata('error', $this->upload->display_errors());
                    	redirect('Staff/pengajuan');
					}
				}
	
				$data['lampiran_pendukung'] = json_encode($lampiran);
			}
	
			// Store updated data to the database
			$this->pengajuan_progress_model->update_pengajuan($id, $data);
			$this->session->set_flashdata('success', 'Pengajuan berhasil diperbarui.');
        	redirect('Staff/pengajuan');
		}
	}
	
	
	
	
}
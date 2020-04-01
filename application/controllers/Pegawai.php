<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pegawai_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		$data['row'] = $this->pegawai_m->get();
		$this->template->load('template', 'pegawai/data_pegawai', $data);
	}

	public function add()
	{		
		$this->form_validation->set_rules('nip', 'NIP', 'required|min_length[15]|is_unique[pegawai.NIP]');
		$this->form_validation->set_rules('nik', 'NIK', 'required|min_length[15]');
		$this->form_validation->set_rules('npwp', 'NPWP', 'required|min_length[15]');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('tempatlahir', 'tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggallahir', 'tanggal_lahir', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('notelepone', 'no_telepone', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 15 karakter');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if($this->form_validation->run()== FALSE){
			$this->template->load('template', 'pegawai/add_form_pegawai');
		}else{
			$post= $this->input->post(null, TRUE);
			$this->pegawai_m->add($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('pegawai')."';</script>";
		}

	}
	
}

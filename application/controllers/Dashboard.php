<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('download');
		$this->load->library('form_validation');
		$this->load->model('admin_pengguna');
		$this->load->library('pagination');
		$this->load->helper('file');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['title'] = "Arsip Surat";

		$data['surat'] = $this->admin_pengguna->all();
		$this->load->view('header_admin', $data);
		$this->load->view('daftar_surat', $data);
		$this->load->view('footer_admin', $data);
	}

	public function hapusSurat($id)
	{
		if ($this->admin_pengguna->proses_hapus_surat($id)) {
			$this->session->set_flashdata('hapus_surat', true);
		} else {
			$this->session->set_flashdata('hapus_surat', false);
		}
		echo "<script>alert('Data Berhasil Dihapus :)');</script>";
		redirect('Dashboard/index', 'refresh');
	}

	public function tambahArsip()
	{
		$data['title'] = 'Tambah Arsip';

		$this->form_validation->set_rules('no_surat', 'no_surat', 'required');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('file', '', 'callback_file_check');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header_admin', $data);
			$this->load->view('tambah_arsip', $data);
			$this->load->view('footer_admin', $data);
		} else {
			$this->admin_pengguna->proses_tambah_surat();
			echo "<script>alert('Anda berhasil menambah data');</script>";
			redirect('Dashboard/index', 'refresh');
		}
	}

	public function file_check($str)
	{
		$allowed_mime_type_arr = array('application/pdf');
		$mime = get_mime_by_extension($_FILES['file']['name']);
		if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				// return true;
				if (filesize($_FILES['file']['tmp_name']) > 2097152) {
					$this->form_validation->set_message('file_check', 'The document file size shoud not exceed 2MB!');
					return false;
				}
			} else {
				$this->form_validation->set_message('file_check', 'Please select only pdf file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check', 'Please choose a file to upload.');
			return false;
		}
	}

	public function downloadFile($file)
	{
		force_download('assets/img/' . $file, NULL);
	}

	public function lihatSurat($id)
	{
		$data['title'] = 'Lihat Surat';
		$data['surat'] = $this->admin_pengguna->getSuratById($id);
		$this->load->view('header_admin', $data);
		$this->load->view('lihat_surat', $data);
		$this->load->view('footer_admin', $data);
	}

	public function about()
	{
		$data['title'] = "About";

		$this->load->view('header_admin', $data);
		$this->load->view('about', $data);
		$this->load->view('footer_admin', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MX_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		die('halaman ini terproteksi');
	}

	public function tambah_kategori()
	{
		$this->load->view('tambah_kategori');
	}

	public function tambah_investor()
	{
		$this->load->view('tambah_investor');
	}

	public function tambah_tarif()
	{
		$this->load->view('tambah_tarif');
	}

}

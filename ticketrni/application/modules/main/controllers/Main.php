<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller {

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
		$this->load->view('main');
	}

	public function compare()
	{
		$this->load->view('compare');
	}

	public function backup()
	{
		$this->load->view('backup');
	}

	public function cari()
	{
		$this->load->view('cari');
	}

	public function hasil()
	{
		$this->load->view('hasil');
	}

	public function booking()
	{
		$this->load->view('booking');
	}

}

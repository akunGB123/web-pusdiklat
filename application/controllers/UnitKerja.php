<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UnitKerja extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 2) {
		// 	echo 'blocked';
		// 	die;
		// }
	}

	// fungsi load template secara dinamis
	public function loadTemplate($menu)
	{
		$this->load->view('templates/administrator-templates/header');
		$this->load->view('templates/administrator-templates/nav_menu');
		$this->load->view('templates/administrator-templates/side_menu');
		$this->load->view('administrator/' . $menu['menu']);
		$this->load->view('templates/administrator-templates/footer');
	}


	public function index()
	{
		$data['menu'] = 'index';
		$this->loadTemplate($data);
	}

	public function approval()
	{
		$data['menu'] = 'menu_approvement';
		$this->loadTemplate($data);
	}

	public function rejection()
	{
		$data['menu'] = 'menu_rejection';
		$this->loadTemplate($data);
	}

	public function verifikasiBerkas()
	{
		$data['menu'] = 'verifikasi_berkas';
		$this->loadTemplate($data);
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pusat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	// fungsi load template secara dinamis
	public function loadTemplate($menu)
	{
		$this->load->view('templates/administrator-templates/header');
		$this->load->view('templates/administrator-templates/nav_menu');
		$this->load->view('templates/administrator-templates/side_menu');
		$this->load->view('administrator-pusat/' . $menu['menu']);
		$this->load->view('templates/administrator-templates/footer');
	}


	public function daftarpelamar()
	{
		$data['menu'] = 'daftar_pelamar';
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
	public function rincianpelamar()
	{
		$data['menu'] = 'rincian_pelamar';
		$this->loadTemplate($data);
	}
}

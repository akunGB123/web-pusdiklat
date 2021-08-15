<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Balasan_model extends CI_Model
{

	public function getPermohonanWithStatus($status)
	{
		$this->db->select("*");
		$this->db->from("surat_permohonan");
		$this->db->join('pelamar', 'surat_permohonan.id_pelamar = pelamar.id', 'LEFT');
		$this->db->join('unit_kerja', 'surat_permohonan.id_unit = unit_kerja.id', 'LEFT');
		$this->db->join('surat_balasan', 'surat_permohonan.id_permohonan = surat_balasan.id_surat_mohon', 'LEFT');
		$this->db->where('status !=', $status['status']);
		return $this->db->get()->result_array();
	}
	public function getDataById($id)
	{
		$this->db->select("*");
		$this->db->from("surat_permohonan");
		$this->db->join('pelamar', 'surat_permohonan.id_pelamar = pelamar.id', 'LEFT');
		$this->db->join('unit_kerja', 'surat_permohonan.id_unit = unit_kerja.id', 'LEFT');

		$this->db->where('id_permohonan', $id);
		return $this->db->get()->result_array();
	}
	public function getDataWithStatus($data)
	{
		// Joining table surat_permohonan, pelamar, unit_kerja
		$this->db->select('*');
		$this->db->from('surat_permohonan');
		$this->db->join('pelamar', 'surat_permohonan.id_pelamar = pelamar.id', 'LEFT');
		$this->db->join('unit_kerja', 'surat_permohonan.id_unit = unit_kerja.id', 'LEFT');
		$this->db->where('status', $data['status']);
		return $this->db->get()->result_array();
	}
	public function countBalasanSurat()
	{
		$this->db->select("*");
		$this->db->from("surat_permohonan");
		$this->db->join('pelamar', 'surat_permohonan.id_pelamar = pelamar.id', 'LEFT');
		$this->db->join('unit_kerja', 'surat_permohonan.id_unit = unit_kerja.id', 'LEFT');
		$this->db->join('surat_balasan', 'surat_permohonan.id_permohonan = surat_balasan.id_surat_mohon', 'LEFT');
		$this->db->where('status !=', 'Menunggu Verifikasi');
		$this->db->where('id_surat_balasan =', null);
		return $this->db->count_all_results();
	}
}

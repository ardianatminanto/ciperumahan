<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perumahan_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function get_perumahan($kategori, $kunci)
	{
		if($kategori == 'lahan')
		{
			$query = $this->db->query(
				"SELECT DISTINCT k.nama_kecamatan AS nama_kec, pn.nama_perusahaan AS nama_prsh, pr.nama_perumahan AS nama_prmh, l.nama_lokasi AS nama_lok
				FROM kecamatan k,lokasi l,pengembang pn,perumahan pr, lahan lh
				WHERE k.id_kecamatan=lh.id_kecamatan
				AND l.id_lokasi=lh.id_lokasi
				AND pn.id_perusahaan=lh.id_perusahaan
				AND pr.id_perumahan=lh.id_perumahan
				AND (k.nama_kecamatan like '%{$kunci}%'
				OR l.nama_lokasi like '%{$kunci}%'
				OR pn.nama_perusahaan like '%{$kunci}%'
				OR pr.nama_perumahan like '%{$kunci}%')"
			);

			return $query->result();
		}
		else
		{
			$query = $this->db->query(
				"SELECT DISTINCT k.nama_kecamatan AS nama_kec, pn.nama_perusahaan AS nama_prsh, pr.nama_perumahan AS nama_prmh, l.nama_lokasi AS nama_lok
				FROM kecamatan k,lokasi l,pengembang pn,perumahan pr, rumah lh
				WHERE k.id_kecamatan=lh.id_kecamatan
				AND l.id_lokasi=lh.id_lokasi
				AND pn.id_perusahaan=lh.id_perusahaan
				AND pr.id_perumahan=lh.id_perumahan
				AND (k.nama_kecamatan like '%{$kunci}%'
				OR l.nama_lokasi like '%{$kunci}%'
				OR pn.nama_perusahaan like '%{$kunci}%'
				OR pr.nama_perumahan like '%{$kunci}%')"
			);

			return $query->result();
		}
	}
}
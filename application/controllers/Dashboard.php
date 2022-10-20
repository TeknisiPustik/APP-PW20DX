<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		//pengiriman parameter ke "View"
		//1. dengan variable (array)
		// $data['nama'] = "udin";						//array prosedural
		// $data['kelas'] = "IF 20 Dx";
		// $data['title'] = "Halaman Dashboard";

		//2. dengan arrow function (array)
		$data = array(
			"nama" => "RauL",
			"kelas" => "IF20DX",
			"jurusan" => "informatika",					//array function
			"telepon" => "0808080808",
			"kelamin" => "laki-laki",
			"title" => "halaman Dashboard"
		);

		// format array hanya dapat di gunakan dengan salah satu format saja

		$this->load->view('dashboard_vw', $data);
	}

	public function kirim_konstan()
	{
		$this->load->view('dashboard2_vw');


		//note
		//perbedaan konstanta dengan variable yaitu: 
		//pada saat program berjalan konstanta tidak dapat diubah
		//sedangkan variable dapat diubah berupa inputan

		//contoh menggunakan library atau helper pada sebuah page / fungction tertentu
		// $this->load->library(array('email', 'session'));
		// $this->load->helper(array('capcha'));
	}
}

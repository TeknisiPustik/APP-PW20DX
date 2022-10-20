<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function index()
    {
        //panggil model "Mmahasiswa"
        $this->load->model("Mmahasiswa", "mhs", true); // format pemanggilan data ("Nama Model","alias",True)
        //panggil fungsi "getData()"
        // $hasil = $this->mhs->getData();
        // //tampilkan isi dari "$hasil"
        // foreach ($hasil as $data) {
        //     //tampilkan data sesuai dengan field
        //     $id = $data->id;
        //     $npm = $data->npm;
        //     $nama = $data->nama;
        //     $telepon = $data->telepon;
        //     $jurusan = $data->jurusan;
        //     $foto = $data->foto;
        //     $status = $data->status;

        //     echo $npm . "," . $nama;
        // }

        //panggil fungsi "getData()"
        $data = array(
            "hasil" => $this->mhs->getData()
        );
        //panggil view "vw_mahaiswa"
        $this->load->view("vw_mahasiswa", $data);
    }
}

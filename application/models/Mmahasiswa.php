<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmahasiswa extends CI_Model
{

    public function getData()
    {
        //untuk menselekis fild
        // $this->db->select("npm","nama");

        //tampilkan data dari "tb_mahasiswa" pada database
        $this->db->from("tb_mahasiswa");
        //urutkan data berdasarkan npm secara Ascending
        $this->db->order_by("npm","ASC"); // format data ("table yang akan di urutkan", "diurutkan secara ASC/DSC")
        //ekseskusi query
        $query = $this->db->get()->result();
        //kirim hasil query ke controller
        //"mahasiswa"
        return $query;
    }
}

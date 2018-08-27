<?php
class barang extends CI_Controller{
    function index()
    {
        echo "Hidup Seperti Lerry";
    }
    
    function elektronik()
    {
        $this->load->view('daftarbarang');
    }
}
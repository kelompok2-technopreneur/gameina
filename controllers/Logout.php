<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function index()
    {
        // Hapus semua data sesi
        $this->session->sess_destroy();
        $this->session->set_flashdata('success-logout', 'Logout berhasil');
        // Alihkan pengguna kembali ke halaman login atau halaman lain
        redirect('welcome');
        // Ganti dengan halaman login Anda

    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VerifyToken extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('token_model');
    }

    public function index()
    {
        // Ambil input dari form
        $email = $this->input->post('email');
        $token = $this->input->post('token');

        // Validasi input
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('token', 'Token', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error-token', validation_errors());
            $this->load->view('auth/verify_token'); // Ganti dengan halaman form Anda
        } else {
            // Verifikasi token
            $result = $this->token_model->verify_token($email, $token);

            if ($result) {
                // Jika token valid
                $this->session->set_flashdata('success-token', 'Token valid!');
                redirect('games/premium'); // Ganti dengan halaman form Anda
            } else {
                // Jika token tidak valid
                $this->session->set_flashdata('error-token', 'Token tidak valid.');

                $this->load->view('auth/verify_token'); // Ganti dengan halaman form Anda
            }
        }
    }
}

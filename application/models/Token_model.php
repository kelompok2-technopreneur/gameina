<?php
class Token_model extends CI_Model
{
    public function verify_token($email, $token)
    {
        $this->db->where('email', $email);
        $this->db->where('token', $token);
        $query = $this->db->get('user_token'); // Pastikan tabel 'tokens' ada di database
        return $query->row();
    }
}

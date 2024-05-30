<?php

class M_games extends CI_Model
{

    public function tampil_data()
    {
        $populer = 'populer';
        $this->db->where('kategori', $populer);
        return $this->db->get('playgames');
    }

    public function fps()
    {
        $fps = 'fps';
        $this->db->where('kategori', $fps);
        return $this->db->get('playgames');
    }

    public function arcade()
    {
        $arcade = 'arcade';
        $this->db->where('kategori', $arcade);
        return $this->db->get('playgames');
    }

    public function balapan()
    {
        $balapan = 'balapan';
        $this->db->where('kategori', $balapan);
        return $this->db->get('playgames');
    }
    public function prasekolah()
    {
        $prasekolah = 'prasekolah';
        $this->db->where('kategori', $prasekolah);
        return $this->db->get('playgames');
    }
    public function kanak()
    {
        $kanak = 'kanak';
        $this->db->where('kategori', $kanak);
        return $this->db->get('playgames');
    }
    public function awal()
    {
        $awal = 'awal';
        $this->db->where('kategori', $awal);
        return $this->db->get('playgames');
    }
    public function akhir()
    {
        $akhir = 'akhir';
        $this->db->where('kategori', $akhir);
        return $this->db->get('playgames');
    }
    public function remaja()
    {
        $remaja = 'remaja';
        $this->db->where('kategori', $remaja);
        return $this->db->get('playgames');
    }

    public function misteri()
    {
        $misteri = 'misteri';
        $this->db->where('kategori', $misteri);
        return $this->db->get('playgames');
    }

    public function edukasi()
    {
        $edukasi = 'edukasi';
        $this->db->where('kategori', $edukasi);
        return $this->db->get('playgames');
    }

    public function olahraga()
    {
        $olahraga = 'olahraga';
        $this->db->where('kategori', $olahraga);
        return $this->db->get('playgames');
    }

    public function petualangan()
    {
        $petualangan = 'petualangan';
        $this->db->where('kategori', $petualangan);
        return $this->db->get('playgames');
    }

    public function aksi()
    {
        $aksi = 'aksi';
        $this->db->where('kategori', $aksi);
        return $this->db->get('playgames');
    }

    public function multiplayer()
    {
        $multiplayer = 'multiplayer';
        $this->db->where('kategori', $multiplayer);
        return $this->db->get('playgames');
    }

    public function action()
    {
        $action = 'action';
        $this->db->where('kategori', $action);
        return $this->db->get('game');
    }
}

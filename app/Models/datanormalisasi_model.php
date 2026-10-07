<?php
namespace App\Models;
use CodeIgniter\Model;

class Datanormalisasi_model extends Model
{
    protected $table = 'normalisasi_saw';  // Menggunakan view normalisasi_saw

    public function tampilnormalisasi()
    {
        // Query untuk mendapatkan semua data dari view normalisasi_saw
        return $this->db->table($this->table)->get()->getResult();
    }
}

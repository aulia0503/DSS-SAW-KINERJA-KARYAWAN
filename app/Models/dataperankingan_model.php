<?php
namespace App\Models;
use CodeIgniter\Model;

class dataperankingan_model extends Model
{
protected $table = 'praranking_saw';  // Menggunakan view normalisasi_saw

public function tampilRanking()
{
    // Query untuk mendapatkan semua data dari view normalisasi_saw
    return $this->db->table($this->table)->get()->getResult();
}
}

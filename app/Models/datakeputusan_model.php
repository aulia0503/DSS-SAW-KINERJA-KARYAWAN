<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakeputusan_model extends Model
{
    protected $table = 'ranking_saw';

    public function __construct()
    {
        $this->db = db_connect(); // Koneksi database
    }

    public function tampilkeputusan()
    {
        // Query untuk mendapatkan semua data dari view ranking_saw
        return $this->db->table($this->table)->get()->getResult();
    }
}


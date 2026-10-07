<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakonversi_model extends Model
{
    protected $table = 'nilai_min_max';

    function __construct()
    {
        $this->db = db_connect();
    }

    // Fungsi untuk menampilkan nilai max dan min dalam satu baris berdasarkan id_bobot
    public function tampilkeputusan()
    {
        {
            // Query untuk mendapatkan semua data dari view nilai_min_max
            return $this->db->table($this->table)->get()->getResult();
        }
        // Query untuk mendapatkan nilai max dan min dalam satu baris
    }}

<?php

namespace App\Models;

use CodeIgniter\Model;

class matrikkeputusan_model extends Model
{
    protected $table = 'matrik_keputusan';
    protected $primaryKey = 'id_matriks';
    protected $allowedFields = ['id_matriks','id_alternatif', 'id_bobot', 'id_skala'];
    protected $useTimestamps = false;

    // Relasi dengan tabel data_karyawan
    public function getKaryawan($id_matriks = null)
    {
        if ($id_matriks === null) {
            return $this->db->table('matrik_keputusan')
                ->join('data_karyawan', 'data_karyawan.id_karyawan = matrik_keputusan.id_alternatif')
                ->join('data_bobot', 'data_bobot.id_bobot = matrik_keputusan.id_bobot')
                ->join('skala', 'skala.id_skala = matrik_keputusan.id_skala')
                ->get()->getResult();
        }

        return $this->db->table('matrik_keputusan')
            ->join('data_karyawan', 'data_karyawan.id_karyawan = matrik_keputusan.id_alternatif')
            ->join('data_bobot', 'data_bobot.id_bobot = matrik_keputusan.id_bobot')
            ->join('skala', 'skala.id_skala = matrik_keputusan.id_skala')
            ->where('id_matriks', $id_matriks)
            ->get()->getRow();
    }

    // Ambil data bobot dari tabel data_bobot
    public function getBobot()
    {
        return $this->db->table('data_bobot')->get()->getResult();
    }

    // Ambil data skala dari tabel skala
    public function getSkala()
    {
        return $this->db->table('skala')->get()->getResult();
    }

    // Fungsi untuk menambah data matrik keputusan
    public function tambahMatrikKeputusan($data)
    {
        return $this->insert($data);
    }

    public function getKaryawannya()
    {
        return $this->db->table('data_karyawan')
            ->select('id_karyawan, nama_karyawan') 
            ->get()
            ->getResult();
    }
        public function hapusMatrikKeputusan($id_matriks)
{
    return $this->delete(['id_matriks' => $id_matriks]);
}

    
}
    // Ambil data bobot dari tabel data_bobot
    // public function getBobot()
    // {
    //     return $this->db->table('data_bobot')->get()->getResult();
    // }

    // // Ambil data skala dari tabel skala
    // public function getSkala()
    // {
    //     return $this->db->table('skala')->get()->getResult();
    // }

    // Fungsi untuk menambah data matrik keputusan
    // public function tambahMatrikKeputusan($data)
    // {
    //     return $this->insert($data);
    // }

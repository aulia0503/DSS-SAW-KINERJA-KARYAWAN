<?php 
// namespace App\Models;
// use CodeIgniter\Model;

// class namajenis_model extends Model
// {
//     protected $table = 'jenis_usaha';
 
//     function __construct()
//     {
//         $this->db = db_connect();
//     }

//     function tampiljenis()
//     {
//         $dataquery=$this->db->query("select * from jenis_usaha");
//         return $dataquery->getResult();
//     }

//     //tambahan
//     function getJenisById($id)
// {
//     return $this->db->table($this->table)->where('id_usaha', $id)->get()->getRow();
// }

// function updateJenis($id, $data)
// {
//     return $this->db->table($this->table)->where('id_usaha', $id)->update($data);
// }

// function deleteJenis($id)
// {
//     return $this->db->table($this->table)->where('id_usaha', $id)->delete();
// }


    
// }

namespace App\Models;
use CodeIgniter\Model;

namespace App\Models;

use CodeIgniter\Model;

class namajenis_model extends Model
{
    protected $table = 'jenis_usaha'; // Ganti dengan nama tabel sebenarnya
    protected $primaryKey = 'id_usaha'; // Ganti dengan primary key tabel
    protected $allowedFields = ['devisi']; // Kolom yang diizinkan untuk diisi


    function __construct()
    {
        $this->db = db_connect();
    }

    // function tampiljenis()
    // {
    //     $dataquery = $this->db->query("SELECT * FROM jenis_usaha");
    //     return $dataquery->getResult();
    // }
    public function tampiljenis()
{
    return $this->db->table('jenis_usaha')->get()->getResult();
}

    // function getJenisById($id)
    // {
    //     return $this->db->table($this->table)->where('id_usaha', $id)->get()->getRow();
    // }

    public function saveJenis($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function tampilData()
    {
        return $this->db->table($this->table)
                        ->orderBy('id_usaha')
                        ->get()
                        ->getResult();
    }

    public function getJenisById($id)
    {
        return $this->db->table($this->table)
                        ->where('id_usaha', $id)
                        ->get()
                        ->getRow();
    }

    public function updateJenis($data, $where)
    {
        return $this->db->table($this->table)
                        ->update($data, $where);
    }

    public function deleteJenis($id)
{
    return $this->db->table($this->table)->delete(['id_usaha' => $id]);
}

public function tambahKaryawan()
    {
        // Instansiasi model namajenis_model
        $jenisUsahaModel = new namajenis_model();

        // Ambil semua data jenis usaha
        $jenisUsaha = $jenisUsahaModel->tampiljenis();

        // Kirim data jenis usaha ke view
        return view('tambah_karyawan', ['jenisUsaha' => $jenisUsaha]);
    }
}

<?php 
namespace App\Models;
use CodeIgniter\Model;

class databobot_model extends Model
{
    
    protected $table = 'data_bobot'; // Tabel sesuai database
    protected $primaryKey = 'id_bobot'; // Primary key
    protected $allowedFields = ['kode_kriteria', 'nama_kriteria', 'nama_bobot',
     'nilai_bobot']; // Kolom yang dapat diisi
 
    function __construct()
    {
        $this->db = db_connect();
    }

    // function tampilbobot()
    // {
    //     $dataquery=$this->db->query("select * from data_bobot");
    //     return $dataquery->getResult();
    // }
    public function tampilbobot()
{
    return $this->db->table($this->table)->get()->getResultArray(); // Ambil semua data dalam bentuk array
}

    public function saveBobot($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function getBobotById($id)
    {
        return $this->db->table($this->table)->where
        ('id_bobot', (int)$id)->get()->getRow();
    }

    // Memperbarui data bobot berdasarkan kondisi tertentu
    public function updateBobot($id, $data)
    {
        return $this->db->table($this->table)
                        ->where('id_bobot', $id)
                        ->update($data);
    }
    

    // Menghapus data bobot berdasarkan ID
    public function deleteBobot($id)
{
    return $this->delete($id);
}


}

<?php 
namespace App\Models;
use CodeIgniter\Model;

class Datakaryawan_model extends Model
{
    protected $table = 'data_karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $allowedFields = ['nama_karyawan', 'devisi', 'kelamin', 'tanggal_lahir', 'alamat', 'agama'];

    public function __construct()
    {
        $this->db = db_connect(); // Menghubungkan ke database
    }
    public function tampilData()
    {
        return $this->db->table($this->table)
                        ->join('jenis_usaha', 'jenis_usaha.devisi = data_karyawan.devisi', 'left') // Tambahkan LEFT JOIN jika perlu
                        ->select('data_karyawan.*, jenis_usaha.devisi as nama_devisi') // Gunakan alias untuk kolom
                        ->get()->getResult();
    }
    
    public function saveKaryawan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getKaryawanById($id)
    {
        return $this->db->table($this->table)->where('id_karyawan', (int)$id)->get()->getRow();
    }

    public function updateKaryawan($id, $data)
    {
        return $this->db->table($this->table)
                        ->where('id_karyawan', $id)
                        ->update($data);
    }
 
    public function deleteKaryawan($id)
    {
        return $this->delete($id);
    }
}

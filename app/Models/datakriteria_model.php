<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakriteria_model extends Model
{
    protected $table = 'data_kriteria';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkriteria()
    {
        $dataquery = $this->db->query("SELECT * FROM data_kriteria");
        return $dataquery->getResult();
    }

    function getKriteriaById($id)
    {
        $dataquery = $this->db->query("SELECT * FROM data_kriteria WHERE id_kriteria = ?", [$id]);
        return $dataquery->getRow();
    }

    function insertKriteria($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    function updateKriteria($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_kriteria' => $id]);
    }
    
    function deleteKriteria($id)
    {
        return $this->db->table($this->table)->delete(['id_kriteria' => $id]);
    }
}

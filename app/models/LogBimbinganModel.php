<?php
class LogBimbinganModel
{
    private $conn;
    private $table = 'log_bimbingan';

    public $id;
    public $id_tugas_akhir;
    public $tanggal;
    public $catatan;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table . " 
                  (id_tugas_akhir, tanggal, catatan) 
                  VALUES (:id_tugas_akhir, :tanggal, :catatan)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_tugas_akhir', $this->id_tugas_akhir);
        $stmt->bindParam(':tanggal', $this->tanggal);
        $stmt->bindParam(':catatan', $this->catatan);
        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE " . $this->table . " 
                  SET id_tugas_akhir = :id_tugas_akhir, tanggal = :tanggal, catatan = :catatan 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_tugas_akhir', $this->id_tugas_akhir);
        $stmt->bindParam(':tanggal', $this->tanggal);
        $stmt->bindParam(':catatan', $this->catatan);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}

<?php

class Tanggapan_model {
    private $table = 'tanggapan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addTanggapan($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES(NULL, :id_aduan, :id_petugas, :tgl_tanggapan, :tanggapan)';
        $this->db->query($query);
        $this->db->bind('id_aduan', $data['id_aduan']);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('tgl_tanggapan', $data['tgl_tanggapan']);
        $this->db->bind('tanggapan', $data['tanggapan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAllTanggapan()
    {
        $query = 'SELECT * FROM ' . $this->table;
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getTanggapanByAduanId($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_aduan=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }
}
<?php

class Aduan_model {
    private $table = 'aduan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // query all aduan data from db
    public function getAllAduan()
    {
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY id_aduan DESC';
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getLatestAduan($limit)
    {
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY id_aduan DESC LIMIT :limit';
        $this->db->query($query);
        $this->db->bind('limit', $limit);

        return $this->db->resultSet();
    }

    // get aduan data by id_aduan
    public function getAduanById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_aduan=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    // query aduan data based on its status, then sort it by desired order
    public function getAduanByStatus($status, $order)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE status=:status ORDER BY id_aduan ' . $order;
        $this->db->query($query);
        $this->db->bind('status', $status);

        return $this->db->resultSet();
    }

    // query aduan data which keyword includes in the data
    public function getAduanByJudulOrAduan($key)
    {
        $query = "SELECT * FROM {$this->table} WHERE judul LIKE '%{$key}%' OR aduan LIKE '%{$key}%'";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    // insert aduan data to db
    public function addAduan($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES(NULL, :nama, :email, :judul, :aduan)';
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('aduan', $data['aduan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
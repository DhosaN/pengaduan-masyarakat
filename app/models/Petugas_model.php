<?php

class Petugas_model {
    private $table = 'petugas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addPetugas($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES(NULL, :id_level, :nama_petugas, :username, :email, :telp, :password)';
        $this->db->query($query);
        $this->db->bind('id_level', $data['id_level']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAllPetugas()
    {
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY nama_petugas ASC';
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getPetugasByEmailAndPassword($data)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE email=:email AND password=:password';
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);

        return $this->db->single();
    }
}
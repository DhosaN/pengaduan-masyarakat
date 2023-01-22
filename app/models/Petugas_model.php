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

    public function getPetugasEmail($email)
    {
        $query = 'SELECT email FROM ' . $this->table . ' WHERE email=:email';
        $this->db->query($query);
        $this->db->bind('email', $email);

        return $this->db->single();
    }

    public function getPetugasById($id)
    {
        $query = "SELECT p.nama_petugas, p.username, p.email, p.telp, l.nama_level FROM {$this->table} AS p LEFT JOIN level AS l ON l.id_level = p.id_level WHERE p.id_petugas=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
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
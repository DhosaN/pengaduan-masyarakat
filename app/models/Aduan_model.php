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
        $query = 'SELECT * FROM ' . $this->table;
        $this->db->query($query);

        return $this->db->resultSet();
    }

    // insert aduan data to db
    public function addAduan($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES(NULL, :nama, :email, :aduan)';
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('aduan', $data['aduan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
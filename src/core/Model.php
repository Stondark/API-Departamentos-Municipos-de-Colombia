<?php

namespace Pipeg\ApiDepartamentosMunicipios\core;

class Model{

    private Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function prepare($query){
        return $this->db->connect()->prepare($query);
    }

    public function query($query){
        return $this->db->connect()->query($query);
    }

}
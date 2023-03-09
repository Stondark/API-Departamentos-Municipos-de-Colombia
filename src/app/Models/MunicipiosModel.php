<?php

namespace Pipeg\ApiDepartamentosMunicipios\app\Models;

use PDO;
use PDOException;
use Pipeg\ApiDepartamentosMunicipios\core\Model;

class MunicipiosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_all(){
        try{
            $query = $this->prepare("SELECT DISTINCT MUNICIPIO as Municipio, DEPARTAMENTO as Departamento, CÓDIGO_DANE_DEL_MUNICIPIO as Codigo_Dane FROM data");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            return false;
        }
    }

    public function get_by_departament(String $name){
        try{
            $query = $this->prepare("SELECT DISTINCT DEPARTAMENTO as Departamento, MUNICIPIO as Municipio, CÓDIGO_DANE_DEL_MUNICIPIO as Codigo_Dane FROM data WHERE Departamento LIKE :Departamento");
            $query->execute([
                "Departamento" => '%' . $name . '%'
            ]);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            return false;
        }
    }

}
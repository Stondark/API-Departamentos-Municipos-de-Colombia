<?php

namespace Pipeg\ApiDepartamentosMunicipios\app\Controllers;

use Pipeg\ApiDepartamentosMunicipios\core\Controller;
use Pipeg\ApiDepartamentosMunicipios\app\Models\MunicipiosModel;

class MunicipiosController extends Controller{

    private $model;

    public function __construct(){
        parent::__construct();
        $this->model = new MunicipiosModel();
    }

    public function get_all(){
        $status = $this->validate_return($this->model->get_all());
        
        return $this->response($status, $this->model->get_all());
    }

    public function get_by_departament($name){
        $status = $this->validate_return($this->model->get_by_departament($name));
        return $this->response($status, $this->model->get_by_departament($name));
    }
}

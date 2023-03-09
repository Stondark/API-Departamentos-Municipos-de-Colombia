<?php

namespace Pipeg\ApiDepartamentosMunicipios\core;
use Pipeg\ApiDepartamentosMunicipios\core\Request;

class Controller{

    public $request;

    public function __construct(){
        $this->request = new Request();
    }

    public function validate_return($return){
        return $return != false ? 200 : 404;
    }

    public function response($status, $data){
        return $this->request->response_json($status, $data);
    }



}
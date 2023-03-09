<?php

namespace Pipeg\ApiDepartamentosMunicipios\core;

class Request{

    public function response_json($status = 200, $data = []){
        header('Content-Type: application/json');
        http_response_code($status);
        $success = ($status != 200) ? false : true;
        $response_data = [
            "success" => $success,
            "data" => $data
        ];
        return json_encode($response_data);
    }

}

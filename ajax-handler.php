<?php
header('Content-type: application/json');

abstract class AjaxHandler {
    abstract public function handleRequest();
    
    public function response($data) {
        exit(json_encode(
            array(
                'status' => true,
                'data' => $data
            )
        ));
    }
    
    public function errorResponse($error) {
        http_response_code(404);

        exit(json_encode(
            array(
                'status' => false,
                'error' => $error -> getMessage(),
                'error_code' => $error -> getCode()
            )
        ));
    }
}
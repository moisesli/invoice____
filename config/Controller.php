<?php

namespace Config;



class Controller
{
    public $conn;
    public function __construct()
    {
        $this->conn = mysqli_init();
        $this->conn->ssl_set(
          NULL,
          NULL,
          "./cert.pem",
          NULL,
          NULL
        );
        $this->conn->real_connect(
          '05cr8wjw5112.us-east-1.psdb.cloud',
          'bmxvl9e5244n',
          'pscale_pw_bMz3roGl-KFxp5611iSBfeZgYGWZhYauUQAj3dzcCJI',
          'invoice'
        );
    }
    public function resjson($data = [], $status = 200, array $headers = [], $options = 0){
        header("HTTP/1.1");
        header("Content-Type:application/json");
        echo json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }
    
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
    
class HelloController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Dicoba",
            "name" => "Hafiz"
        ];

        echo view('index', $data);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120120,
            'Name' => 'Shafiq H',
            'Phone' => '088828',
            'Class' => 'XII RPL 7',
        ];
    }
}
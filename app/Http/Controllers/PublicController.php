<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index(){
        return [
            'code'=>110,
            'msg'=>'OK'
        ];
    }
}

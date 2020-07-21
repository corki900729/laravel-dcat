<?php

namespace App\Api\Controllers;

use App\Http\Controllers\Controller;
use Dingo\Api\Http\Request;
class PublicController extends BaseController
{
    //
    public function index(){
        return [
            'code'=>1100,
            'msg'=>'OK'
        ];
    }
}

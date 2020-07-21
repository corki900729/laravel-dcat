<?php
namespace App\Api\Controllers;

use App\Api\Controllers\BaseController;
use Dingo\Api\Http\Request;

class UserController extends  BaseController{
    public $request;

    protected $userService;



    public function register(){
        return $this->response->error('This is an error.', 404);
    }
    public function show(Request $request){
        return $request['abc'];
    }
    public function index(Request $request){
        return [
            'code'=>110,
            'msg'=>'OK'
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    Use ApiResponses;
    public function Login(ApiLoginRequest $request){
        return  $this->ok($request->get('email'));
    }
    public function register(){
        return $this->ok('register');
    }
}

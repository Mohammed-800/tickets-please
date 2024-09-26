<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    Use ApiResponses;
    public function Login(){
        return  $this->ok('Hello,Login');
    }
}

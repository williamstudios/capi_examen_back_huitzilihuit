<?php

namespace App\Http\Controllers;


use App\Models\user_domicilio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = user_domicilio::get();
        return $users;
    }
}

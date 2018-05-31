<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;   

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile');
    }
}

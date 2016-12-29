<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function user(){
        dd('hello from user');
    }
    public function seller(){
        dd('hello from seller');
    }
}

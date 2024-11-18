<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // this method will show dashboard page for general user
    public function index(){
        return view('dashboard');
    }
}

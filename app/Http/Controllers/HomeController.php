<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // if ($user = Auth::user()) {
        //     return redirect('dashboard');
        // }
        return view('welcome');
    }
}

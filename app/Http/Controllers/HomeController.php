<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == "user") {
            return view("dashboard");
        } elseif (Auth::user()->role == "admin") {
            return view("admin.home");
        } else {
            return redirect()->back();
        }
    }
}

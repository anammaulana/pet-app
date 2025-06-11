<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function customer()
    {
        return view('customer.index');
    }

     public function home()
    {
        return view('welcome');
    }
}

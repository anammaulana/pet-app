<?php

namespace App\Http\Controllers;

use App\Models\HewanModel;
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
    $hewansTerbaru = HewanModel::latest()->limit(4)->get(); 

    return view('welcome', compact('hewansTerbaru'));
}
}

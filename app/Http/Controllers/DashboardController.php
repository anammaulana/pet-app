<?php

namespace App\Http\Controllers;

use App\Models\HewanModel;
use App\Models\ShelterModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.index', [
            'totalKucing' => HewanModel::whereHas('kategori', fn($q) => $q->where('nama', 'kucing'))->count(),
            'totalAnjing' => HewanModel::whereHas('kategori', fn($q) => $q->where('nama', 'anjing'))->count(),
            'totalHamster' => HewanModel::whereHas('kategori', fn($q) => $q->where('nama', 'hamster'))->count(),
            'totalMarmut' => HewanModel::whereHas('kategori', fn($q) => $q->where('nama', 'marmut'))->count(),
            'totalKelinci' => HewanModel::whereHas('kategori', fn($q) => $q->where('nama', 'kelinci'))->count(),
            'totalShelter' => ShelterModel::count(),
        ]);
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

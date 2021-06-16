<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TempatWisata;

class AdminController extends Controller
{
  public function index()
  {
    $sumtotaltempatwisata = TempatWisata::all()->count('nama_tempat_wisata');
    return view('admin/admin')
    ->with(compact('sumtotaltempatwisata'));

  }
}

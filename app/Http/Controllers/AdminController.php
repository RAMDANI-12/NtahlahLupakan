<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function pengajuan(){
        return view('admin.pengajuan');
    }

    public function users(){
        return view('admin.tabel');
    }
}

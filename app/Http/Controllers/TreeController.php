<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari model
        $daftarPohon = Tree::getAvailableTrees();
        // 2. Kirim data ke View bernama 'pohon'
        return view ('pohon',['trees' => $daftarPohon]); 
    }
}
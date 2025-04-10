<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function galeri(){
        $galeri = Galeri::all();        
        return view('public.galeri', compact('galeri'));
    }
}
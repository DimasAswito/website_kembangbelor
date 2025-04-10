<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\View\View;

class WisataController extends Controller
{
    public function wisata(){
        $wisata = Wisata::all(); 
        return view('public.wisata', compact('wisata'));
    }

    public function show_detail_wisata(string $id): View
    {
        $wisata = Wisata::findOrFail($id);
        return view('public.wisata-details', compact('wisata'));
    }
}
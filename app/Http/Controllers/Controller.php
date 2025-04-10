<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use App\Models\Event;
use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function show_data()
    {
        $data = Event::all(); 
        $wisata = Wisata::latest()->take(3)->get(); 
        return view('public.index', compact('data','wisata'));
    }

    public function show_detail_wisata(string $id): View
    {
        $wisata = Wisata::findOrFail($id);
        return view('public.wisata-details', compact('wisata'));
    }
}   
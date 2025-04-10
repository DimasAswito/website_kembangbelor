<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritiksaran;

class KritikSaranController extends Controller
{
    public function insertData(Request $request){
        kritiksaran::create($request->all());
        return redirect()->route('kontak');
    }
    public function kontak(){
        return view('public.kontak');
    }
}
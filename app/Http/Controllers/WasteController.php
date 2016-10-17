<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WasteController extends Controller
{
    public function index(){
        $waste = \App\Waste::all(); // select * from wastesilos
        $data['allWaste'] = $waste;
        return view('home', $data);
    }

    public function wasteSilos($id){
        $waste = \App\Waste::with('blocktype')->findOrFail($id);
        $data['waste'] = $waste;
        return View('.home', $data);
    }
}

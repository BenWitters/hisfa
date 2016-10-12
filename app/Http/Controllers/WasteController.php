<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WasteController extends Controller
{
    public function index(){
        $allWaste = \App\Waste::all(); // select * from wastesilos
        $wasteData['wasteData'] = $allWaste;

        return view('waste/waste')->with($wasteData);
    }
}

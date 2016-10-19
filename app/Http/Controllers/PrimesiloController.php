<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PrimesiloController extends Controller
{
    public function index(){
        $allPrimesilos = \App\Primesilo::all(); // select * from primesilos
        $primesilosData['primesilosData'] = $allPrimesilos;

        return view('silos/silos')->with($primesilosData);
    }
}

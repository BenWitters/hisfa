<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SilosController extends Controller
{
    //
    public function index(){
        $waste = \App\Waste::all(); // select * from wastesilos
        $datawaste['allWaste'] = $waste;

        $prime = \App\Primesilo::all();
        $dataprime['allPrime'] = $prime;
        return View('home', $dataprime, $datawaste);
    }

    public function showsilos(){
        $waste = \App\Waste::all(); // select * from wastesilos
        $datawaste['allWaste'] = $waste;

        $prime = \App\Primesilo::all();
        $dataprime['allPrime'] = $prime;
        return View('silos/silos', $dataprime, $datawaste);
    }
}

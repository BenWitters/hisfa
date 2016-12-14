<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrimeSiloController extends Controller
{
    public function index(){
        return \App\Primesilo::with('material')->get();
         // return \App\Primesilo::all();
    }
}

?>

<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WasteSiloController extends Controller
{
    public function index(){
        return \App\Waste::all();
    }
}

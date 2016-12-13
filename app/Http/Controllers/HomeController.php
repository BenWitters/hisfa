<?php

namespace App\Http\Controllers;


use App\Notifications\PrimeFull;
use App\Notifications\WasteFull;
use App\User;
use App\Primesilo;
use App\Waste;
use App\Blocktypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $waste = \App\Waste::all(); // select * from wastesilos
        $allWaste = $waste;
        $prime = \App\Primesilo::all();
        $allPrime = $prime;

        $blocktypes = \App\Blocktypes::all();
        $allBlocks = $blocktypes;

        return View('home', ['allPrime' => $allPrime, 'allWaste' => $waste, 'allBlocks' => $allBlocks]);
    }
}

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
       
        $allBlocks = Blocktypes::all();

       
        
        // get all users
        $users = User::all();
        foreach ($users as $user){
            // see if a user wants to receive prime silo notifications
            if($user->get_notifications_prime == 1){
                // get all prime silos
                $primes = Primesilo::all();
                foreach ($primes as $prime){
                    // see if a silo is 90% full or more
                    if($prime->prime_full_percentage >= 90){
                        // notify user, prime silo data meesturen om weer te geven in mail
                        $user->notify(new PrimeFull($prime));

                    }
                }
            }

        }

        // waste silos

        $users = User::all();
        foreach ($users as $user){
            // see if a user wants to receive waste silo notifications
            if($user->get_notifications_waste == 1){
                // get all waste silos
                $wastes = Waste::all();
                foreach ($wastes as $waste){
                    // see if a silo is 90% full or more
                    if($waste->waste_full_percentage >= 90){
                        // notify user, waste silo data meesturen om weer te geven in mail
                        $user->notify(new WasteFull($waste));

                    }
                }
            }

        }

         // load the view and pass the types
        return View('home')
            ->with('allBlocks', $allBlocks);
    }
}

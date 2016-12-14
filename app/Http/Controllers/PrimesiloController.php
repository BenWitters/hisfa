<?php

namespace App\Http\Controllers;

use App\Notifications\PrimeFull;
use App\User;
use Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Primesilo;
use App\Materialtypes;



class PrimesiloController extends Controller
{

    public function index()
    {
//        $allPrimesilos = \App\Primesilo::all(); // select * from primesilos
//        $primesilosData['primesilosData'] = $allPrimesilos;
//
//        return view('silos/silos')->with($primesilosData);

        $primesilo = Primesilo::all();
        return View('silos/silos')
            ->with('primesilo', $primesilo);
    }


    public function create()
    {
        $materials = Materialtypes::pluck('material_type_name', 'id');

        return View('primesilo.create')->with(array('materials' => $materials->toArray()));
    }


    public function store(Requests\CreatePrimesilo $request)

    {
        // vraagt alles -> enkel welke fillable zijn (in model)
        Primesilo::create($request->all());
        return redirect('silos/silos');
    }

    public function show($id)
    {
        $primesilo = Primesilo::find($id);

        return View('primesilo.show')
            ->with('primesilo', $primesilo);
    }

    public function edit($id)
    {

        $primesilo = primesilo::find($id);
        $materials = Materialtypes::pluck('material_type_name', 'id');
        $primesilo = Primesilo::find($id);


        return View('primesilo.edit')
            ->with(array("primesilo" => $primesilo, 'materials' => $materials->toArray()));
    }


    public function update($id)
    {

        $primesilo = Primesilo::find($id);
        $primesilo->prime_silo_number      = Request::get('prime_silo_number');
        $primesilo->prime_full_percentage      = Request::get('prime_full_percentage');
        $primesilo->material_id    = Request::get('prime_material');

        if($primesilo->prime_full_percentage <= 100){
            $primesilo->save();
        }else{
            $primesilo->prime_full_percentage = 100;
            $primesilo->save();
        }

        

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

        
        return Redirect('primesilo');



    }

    public function destroy($id)
    {
//        DB::table('primesilos')->where('id',$id)->delete();
//        return Redirect::route('silos');
//        \App\Primesilo::destroy($id);
//        return Redirect::back();


        $primesilo = Primesilo::find($id);
        $primesilo->delete();

        // redirect
        return Redirect ('primesilo');
    }
}

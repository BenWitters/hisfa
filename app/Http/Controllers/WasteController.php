<?php

namespace App\Http\Controllers;

use App\User;
use App\Waste;
use Request;
use Input;

use App\Http\Requests;
use App\Materialtypes;

class WasteController extends Controller
{
    public function index()
    {
        // get all the types
        $waste = Waste::all();

        // load the view and pass the types
        return View('silos/silos')
            ->with('waste', $waste);
    }


    public function create()
    {
        $materials = Materialtypes::pluck('material_type_name', 'id');
        return View('waste.create')->with(array('materials' => $materials->toArray()));
    }


    public function store(Requests\CreateWaste $request)
    {
        Waste::create($request->all());

        return redirect('silos/silos');
    }

    public function show($id)
    {
        $waste = Waste::find($id);

        return View('waste.show')
            ->with('waste', $waste);
    }

    public function edit($id)
    {
        $waste = Waste::find($id);
        $materials = Materialtypes::pluck('material_type_name', 'id');

        return View('waste.edit')
            ->with(array("waste" => $waste, 'materials' => $materials->toArray()));
    }


    public function update($id)
    {
        // store
        $waste = Waste::find($id);
        $waste->waste_silo_number      = Request::get('waste_silo_number');
        $waste->save();

        /*
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
        */

        return Redirect('waste');
    }

    public function destroy($id)
    {
            $waste = Waste::find($id);
            $waste->delete();

            // redirect
            return Redirect('waste');
    }

//    public function index(){
//        $waste = \App\Waste::all(); // select * from wastesilos
//        $data['allWaste'] = $waste;
//        return view('home', $data);
//    }

    public function wasteSilos($id){
        $waste = \App\Waste::with('blocktype')->findOrFail($id);
        $data['waste'] = $waste;
        return View('.home', $data);
    }
}

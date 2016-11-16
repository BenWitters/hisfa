<?php

namespace App\Http\Controllers;

use App\Waste;
use Request;
use Input;

use App\Http\Requests;

class WasteController extends Controller
{
    public function index()
    {
        // get all the types
        $waste = Waste::all();

        // load the view and pass the types
        return View('silos')
            ->with('waste', $waste);
    }


    public function create()
    {
        return View('waste.create');
    }


    public function store(Requests\CreateWaste $request)
    {
        Waste::create($request->all());

        return redirect('silos');
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

        return View('waste.edit')
            ->with('waste', $waste);
    }


    public function update($id)
    {
        // store
        $waste = Waste::find($id);
        $waste->waste_silo_number      = Request::get('waste_silo_number');
        $waste->save();
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

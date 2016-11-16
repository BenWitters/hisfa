<?php

namespace App\Http\Controllers;

use App\Materialtypes;
use Request;
use Input;

use App\Http\Requests;

class MaterialTypeController extends Controller
{
    public function index()
    {
        // get all the types
        $materialtypes = Materialtypes::all();

        // load the view and pass the types
        return View('materialtypes.materialtypes')
            ->with('materialtypes', $materialtypes);
    }


    public function create()
    {
        return View('materialtypes.create');
    }


    public function store(Requests\CreateMaterialType $request)
        // een request aanmaken zodat je weet welke velden ingevuld moeten zijn!
    {
        // vraagt alles -> enkel welke fillable zijn (in model)
        materialtypes::create($request->all());
        return redirect('materialtypes');
    }

    public function show($id)
    {
        $materialtypes = Materialtypes::find($id);

        return View('materialtypes.show')
            ->with('materialtypes', $materialtypes);
    }

    public function edit($id)
    {
        $materialtypes = Materialtypes::find($id);

        return View('materialtypes.edit')
            ->with('materialtypes', $materialtypes);
    }


    public function update($id)
    {
        // store
        $materialtypes = Materialtypes::find($id);
        $materialtypes->material_type_name      = Request::get('material_type_name');
        $materialtypes->save();
        return Redirect('materialtypes');

        $blocktypes = Blocktypes::find($id);
        $blocktypes->block_type_name      = Request::get('block_type_name');
        $blocktypes->save();
        return Redirect('blocktypes');


    }

    public function destroy($id)
    {
        $materialtypes = Materialtypes::find($id);
        $materialtypes->delete();

        // redirect
        return Redirect ('materialtypes');
    }

    public function addOctabin($id)
    {
        $materialtype = Materialtypes::find($id);
        $materialtype->increment('amount');

        // redirect
        return Redirect ('materialtypes');
    }

    public function deleteOctabin($id)
    {
        $materialtype = Materialtypes::find($id);
        if ($materialtype->amount > 0) {
            $materialtype->decrement('amount');
        }

        // redirect
        return Redirect ('materialtypes');
    }


}
